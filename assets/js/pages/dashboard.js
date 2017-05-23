function formatNumber(n){
    var d = String(n).match(/\.\d+/g);
    (d == null) && ( d = "");
    n = n>>0;
	n += '';
	return n.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")+d;
}
$(function () {

    // Switchery toggles
    // ------------------------------
    var switches = Array.prototype.slice.call(document.querySelectorAll('.switch'));
    switches.forEach(function (html) {
        var switchery = new Switchery(html, {
            color: '#4CAF50'
        });
    });

    if ($("#widgetDashboard").length) {
        var _host = $("#widgetDashboard");
        $.getJSON(_host.data('json'), function (resp) {
            initCharts(resp);
        });
    }

    function initCharts(json) {
        // Daily revenue line chart
        // ------------------------------

        dailyRevenue('#monthly-visitors', 50, 30);

        // Chart setup
        function dailyRevenue(element, height, day) {

            // Basic setup
            // ------------------------------

            // Add data set
//            var dataset = [];
//            for (var i = 0; i < day; i++) {
//                var _date = moment().subtract(i + 1, "days").format("DD/MM/YY");
//                dataset.push({
//                    "date": _date,
//                    "visitor": Math.round(250 * Math.random()) + 40
//                });
//            }
            var dataset = json.totalvisitors.data;
            var _total = 0;
            dataset.forEach(function(i){
                _total += +i.visitor;
            });
            _host.find(".opt-totolVisitors").text(formatNumber(_total));
            _host.find(".opt-avgVisit").text(formatNumber(Math.round(_total/30)));

            // Main variables
            var d3Container = d3.select(element),
                margin = {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right,
                height = height - margin.top - margin.bottom,
                padding = 20;

            // Format date
            var parseDate = d3.time.format("%d/%m/%y").parse,
                formatDate = d3.time.format("%a, %B %e");



            // Add tooltip
            // ------------------------------
            var tooltip = d3.tip()
                .attr('class', 'd3-tip')
                .html(function (d) {
                    return "<div class='text-center'>" +
                        "<h6 class='no-margin'>" + (d.visitor - 40) + "</h6>" +
                        "<span class='text-size-small'>Visitors</span>" +
                        "<div class='text-size-small'>" + moment(d.date).format("MMM D") + "</div>" +
                        "</div>"
                });



            // Create chart
            // ------------------------------

            // Add svg element
            var container = d3Container.append('svg');

            // Add SVG group
            var svg = container
                .attr('width', width + margin.left + margin.right)
                .attr('height', height + margin.top + margin.bottom)
                .append("g")
                .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
                .call(tooltip);



            // Load data
            // ------------------------------

            dataset.forEach(function (d) {
                d.date = parseDate(d.date);
                d.visitor = +d.visitor+40;
            });



            // Construct scales
            // ------------------------------

            // Horizontal
            var x = d3.time.scale()
                .range([padding, width - padding]);

            // Vertical
            var y = d3.scale.linear()
                .range([height, 5]);



            // Set input domains
            // ------------------------------

            // Horizontal
            x.domain(d3.extent(dataset, function (d) {
                return d.date;
            }));

            // Vertical
            y.domain([0, d3.max(dataset, function (d) {
                return Math.max(d.visitor);
            })]);



            // Construct chart layout
            // ------------------------------

            // Line
            var line = d3.svg.line()
                .x(function (d) {
                    return x(d.date);
                })
                .y(function (d) {
                    return y(d.visitor)
                });



            //
            // Append chart elements
            //

            // Add mask for animation
            // ------------------------------

            // Add clip path
            var clip = svg.append("defs")
                .append("clipPath")
                .attr("id", "clip-line-small");

            // Add clip shape
            var clipRect = clip.append("rect")
                .attr('class', 'clip')
                .attr("width", 0)
                .attr("height", height);

            // Animate mask
            clipRect
                .transition()
                .duration(1000)
                .ease('linear')
                .attr("width", width);



            // Line
            // ------------------------------

            // Path
            var path = svg.append('path')
                .attr({
                    'd': line(dataset),
                    "clip-path": "url(#clip-line-small)",
                    'class': 'd3-line d3-line-medium'
                })
                .style('stroke', '#fff');

            // Animate path
            svg.select('.line-tickets')
                .transition()
                .duration(1000)
                .ease('linear');



            // Add vertical guide lines
            // ------------------------------

            // Bind data
            var guide = svg.append('g')
                .selectAll('.d3-line-guides-group')
                .data(dataset);

            // Append lines
            guide
                .enter()
                .append('line')
                .attr('class', 'd3-line-guides')
                .attr('x1', function (d, i) {
                    return x(d.date);
                })
                .attr('y1', function (d, i) {
                    return height;
                })
                .attr('x2', function (d, i) {
                    return x(d.date);
                })
                .attr('y2', function (d, i) {
                    return height;
                })
                .style('stroke', 'rgba(255,255,255,0.3)')
                .style('stroke-dasharray', '4,2')
                .style('shape-rendering', 'crispEdges');

            // Animate guide lines
            guide
                .transition()
                .duration(1000)
                .delay(function (d, i) {
                    return i * 150;
                })
                .attr('y2', function (d, i) {
                    return y(d.visitor);
                });



            // Alpha app points
            // ------------------------------

            // Add points
            var points = svg.insert('g')
                .selectAll('.d3-line-circle')
                .data(dataset)
                .enter()
                .append('circle')
                .attr('class', 'd3-line-circle d3-line-circle-medium')
                .attr("cx", line.x())
                .attr("cy", line.y())
                .attr("r", 2)
                .style('stroke', '#fff')
                .style('fill', '#FF850D');



            // Animate points on page load
            points
                .style('opacity', 0)
                .transition()
                .duration(250)
                .ease('linear')
                .delay(1000)
                .style('opacity', 1);


            // Add user interaction
            points
                .on("mouseover", function (d) {
                    tooltip.offset([-10, 0]).show(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 3);
                })

                // Hide tooltip
                .on("mouseout", function (d) {
                    tooltip.hide(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 2);
                });

            // Change tooltip direction of first point
            d3.select(points[0][0])
                .on("mouseover", function (d) {
                    tooltip.offset([0, 10]).direction('e').show(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 3);
                })
                .on("mouseout", function (d) {
                    tooltip.direction('n').hide(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 2);
                });

            // Change tooltip direction of last point
            d3.select(points[0][points.size() - 1])
                .on("mouseover", function (d) {
                    tooltip.offset([0, -10]).direction('w').show(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 3);
                })
                .on("mouseout", function (d) {
                    tooltip.direction('n').hide(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 2);
                })



            // Resize chart
            // ------------------------------

            // Call function on window resize
            $(window).on('resize', revenueResize);

            // Call function on sidebar width change
            $('.sidebar-control').on('click', revenueResize);

            // Resize function
            // 
            // Since D3 doesn't support SVG resize by default,
            // we need to manually specify parts of the graph that need to 
            // be updated on window resize
            function revenueResize() {

                // Layout variables
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right;


                // Layout
                // -------------------------

                // Main svg width
                container.attr("width", width + margin.left + margin.right);

                // Width of appended group
                svg.attr("width", width + margin.left + margin.right);

                // Horizontal range
                x.range([padding, width - padding]);


                // Chart elements
                // -------------------------

                // Mask
                clipRect.attr("width", width);

                // Line path
                svg.selectAll('.d3-line').attr("d", line(dataset));

                // Circles
                svg.selectAll('.d3-line-circle').attr("cx", line.x());

                // Guide lines
                svg.selectAll('.d3-line-guides')
                    .attr('x1', function (d, i) {
                        return x(d.date);
                    })
                    .attr('x2', function (d, i) {
                        return x(d.visitor);
                    });
            }
        }



        // Bar charts with random data
        // ------------------------------

        // Initialize charts
        generateBarChart("#journal-traffic", 12, 50, true, "elastic", 1200, 50, "rgba(255,255,255,0.5)");

        // Chart setup
        function generateBarChart(element, barQty, height, animate, easing, duration, delay, color) {


            // Basic setup
            // ------------------------------

            // Add data set
            var bardata = [];

//            for (var i = 0; i < barQty; i++) {
//                var _n = Math.floor(200 * Math.random());
//                bardata.push({
//                    "vol": 87 - i,
//                    "year": 22,
//                    "issue": "ตุลาคม - ธันวาคม 2559",
//                    "visit": _n,
//                    "ebook": Math.floor(_n * Math.random())
//                });
//                arr_visit.push(_n);
//            }
            
            
            bardata = json.journal.data;
            var _today = +json.journal.today,
                _total = +json.journal.total/30;
            
            _host.find(".opt-journallVisit").text(formatNumber(_today));
            _host.find(".opt-avgJournal").text(formatNumber(Math.round(_total)));
            
            // Main variables
            var d3Container = d3.select(element),
                width = d3Container.node().getBoundingClientRect().width;

            // Construct scales
            // ------------------------------

            // Horizontal
            var x = d3.scale.ordinal()
                .rangeBands([0, width], 0.2)

            // Vertical
            var y = d3.scale.linear()
                .range([0, height]);



            // Set input domains
            // ------------------------------

            // Horizontal
            x.domain(d3.range(0, bardata.length));
//            x.domain(d3.extent(dataset, function (d) {
//                return d.volume;
//            }));

            // Vertical
            y.domain([0, d3.max(bardata, function (d) {
                return Math.max(+d.visit);
            })]);



            // Create chart
            // ------------------------------

            // Add svg element
            var container = d3Container.append('svg');

            // Add SVG group
            var svg = container
                .attr('width', width)
                .attr('height', height)
                .append('g');



            //
            // Append chart elements
            //

            // Bars
            var bars = svg.selectAll('rect')
                .data(bardata)
                .enter()
                .append('rect')
                .attr('class', 'd3-random-bars')
                .attr('width', x.rangeBand())
                .attr('x', function (d, i) {
                    return x(i);
                })
                .style('fill', color);



            // Tooltip
            // ------------------------------

            //                var tip = d3.tip()
            //                    .attr('class', 'd3-tip')
            //                    .offset([-10, 0]);
            //                bars.call(tip)
            //                    .on('mouseover', tip.show)
            //                    .on('mouseout', tip.hide);
            //                tip.html(function (d, i) {
            //                    return "<div class='text-center'>" +
            //                        "<h6 class='no-margin'>" + d + "</h6>" +
            //                        "<span class='text-size-small'>Visitors</span>" +
            //                        "<div class='text-size-small'>" + moment().subtract(30 - i, "days").format("MMM D") + "</div>" +
            //                        "</div>"
            //                });
            var tip = d3.tip()
                .attr('class', 'd3-tip')
                .offset([-10, 0]);

            bars.call(tip)
                .on('mouseover', tip.show)
                .on('mouseout', tip.hide);

            tip.html(function (d) {
                return "<ul class='list-unstyled mb-5'>" +
                    "<li>" + "<div class='text-size-base mt-5 mb-5'>ฉบับที่&nbsp;" + d.volume + "&nbsp;ปีที่&nbsp;" + d.year + "<br><span class='text-samll'>"+d.issue+"</span></div>" + "</li>" +
                    "<li>" + "Visitors: &nbsp;" + "<span class='text-semibold pull-right'>" + d.visit + "</span>" + "</li>" +
                    "<li>" + "E-book: &nbsp; " + "<span class='text-semibold pull-right'>" + d.ebook + "</span>" + "</li>" +
                    "</ul>";
            });



            // Bar loading animation
            // ------------------------------

            // Choose between animated or static
            if (animate) {
                withAnimation();
            } else {
                withoutAnimation();
            }

            // Animate on load
            function withAnimation() {
                bars
                    .attr('height', 0)
                    .attr('y', height)
                    .transition()
                    .attr('height', function (d) {
                        return y(d.visit);
                    })
                    .attr('y', function (d) {
                        return height - y(d.visit);
                    })
                    .delay(function (d, i) {
                        return i * delay;
                    })
                    .duration(duration)
                    .ease(easing);
            }

            // Load without animateion
            function withoutAnimation() {
                bars
                    .attr('height', function (d) {
                        return y(d);
                    })
                    .attr('y', function (d) {
                        return height - y(d);
                    })
            }



            // Resize chart
            // ------------------------------

            // Call function on window resize
            $(window).on('resize', barsResize);

            // Call function on sidebar width change
            $('.sidebar-control').on('click', barsResize);

            // Resize function
            // 
            // Since D3 doesn't support SVG resize by default,
            // we need to manually specify parts of the graph that need to 
            // be updated on window resize
            function barsResize() {

                // Layout variables
                width = d3Container.node().getBoundingClientRect().width;


                // Layout
                // -------------------------

                // Main svg width
                container.attr("width", width);

                // Width of appended group
                svg.attr("width", width);

                // Horizontal range
                x.rangeBands([0, width], 0.3);


                // Chart elements
                // -------------------------

                // Bars
                svg.selectAll('.d3-random-bars')
                    .attr('width', x.rangeBand())
                    .attr('x', function (d, i) {
                        return x(i);
                    });
            }
        }
    }








    // Other codes
    // ------------------------------

    // Grab first letter and insert to the icon
    $(".table tr").each(function (i) {

        // Title
        var $title = $(this).find('.letter-icon-title'),
            letter = $title.eq(0).text().charAt(0).toUpperCase();

        // Icon
        var $icon = $(this).find('.letter-icon');
        $icon.eq(0).text(letter);
    });

});
