
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('productChart').getContext('2d');

        // Chuyển dữ liệu sản phẩm thành JSON và lấy dữ liệu name và quantity
        var products = @json($products);
        var productNames = products.map(product => product.name);
        var productQuantities = products.map(product => product.quantity);

        var backgroundColors = [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ];

        var borderColors = [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ];
        var productChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: productNames,
                datasets: [{
                    label: 'Số lượng sản phẩm',
                    data: productQuantities,
                    backgroundColor: backgroundColors.slice(0, productQuantities.length),
                    borderColor: borderColors.slice(0, productQuantities.length),
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>



