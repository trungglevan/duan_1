<div class="col py-3">
    <h3>Biểu đồ</h3>
    <p class="lead"></p>
    <ul class="list-unstyled">
        <li>
            <div class="row">
                <div id="piechart"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    // Load google charts
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);
                    // Draw the chart and set the chart values
                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Danh muc', 'So luong san pham'],
                            <?php
                            $tongdm = count($listtk); //tong ds danh muc co bao nhieu dm 
                            $i = 1;
                            foreach ($listtk as $tk) {
                                extract($tk);
                                if ($i == $tongdm) {
                                    $dauphay = "";
                                } else {
                                    $dauphay = ",";
                                }
                                echo " ['" . $tk['ten_loai_sp'] . "'," . $tk['countsp'] . "]" . $dauphay;
                                $i += 1;
                            }
                            ?>
                        ]);
                        // Optional; add a title and set the width and height of the chart
                        var options = {
                            'title': 'Thống kê ẩm thực theo loại ẩm thực',
                            'width': 1100,
                            'height': 800
                        };
                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                    }
                </script>
            </div>
        </li>
    </ul>
</div>
</div>
</div>