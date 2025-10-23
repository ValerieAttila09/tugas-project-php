document.addEventListener("DOMContentLoaded", (event) => {
  let active = true;
  const sidebarMenu = document.querySelectorAll("#sidebarMenu");

  gsap.set("#sidebar", {
    width: "20%",
  });
  gsap.set("#main", {
    width: "80%",
  });
  gsap.set(sidebarMenu, {
    width: "auto",
    opacity: 1,
    marginLeft: "6px",
  });

  document.getElementById("sidebar-toggle").addEventListener("click", () => {
    if (active) {
      gsap.to("#sidebar", {
        width: "5%",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to("#main", {
        width: "95%",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to(sidebarMenu, {
        width: "0%",
        opacity: 0,
        marginLeft: "0px",
        duration: 0.35,
        ease: "power2.out",
      });
      active = !active;
    } else {
      gsap.to("#sidebar", {
        width: "20%",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to("#main", {
        width: "80%",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to(sidebarMenu, {
        width: "auto",
        opacity: 1,
        marginLeft: "6px",
        duration: 0.35,
        ease: "power2.out",
      });
      active = !active;
    }
  })

  // Chart.js Line Chart Implementation
  const ctx = document.getElementById('chart1');
  
  // Dummy data for the chart
  const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  const data = {
    labels: labels,
    datasets: [
      {
        label: 'Revenue 2024',
        data: [3200, 4100, 3800, 5200, 4800, 6100, 7200, 6800, 7500, 8200, 7800, 9400],
        borderColor: 'rgb(59, 130, 246)',
        backgroundColor: 'rgba(59, 130, 246, 0.1)',
        tension: 0.4,
        fill: true,
        pointRadius: 4,
        pointHoverRadius: 6,
        pointBackgroundColor: 'rgb(59, 130, 246)',
        pointBorderColor: '#fff',
        pointBorderWidth: 2,
      },
      {
        label: 'Revenue 2023',
        data: [2800, 3200, 3100, 4200, 3900, 5100, 5800, 5500, 6200, 6800, 6400, 7200],
        borderColor: 'rgb(14, 165, 233)',
        backgroundColor: 'rgba(14, 165, 233, 0.1)',
        tension: 0.4,
        fill: true,
        pointRadius: 4,
        pointHoverRadius: 6,
        pointBackgroundColor: 'rgb(14, 165, 233)',
        pointBorderColor: '#fff',
        pointBorderWidth: 2,
      }
    ]
  };

  const config = {
    type: 'line',
    data: data,
    options: {
      responsive: true,
      maintainAspectRatio: true,
      plugins: {
        legend: {
          display: true,
          position: 'top',
          labels: {
            usePointStyle: true,
            padding: 15,
            font: {
              size: 12,
              family: 'Outfit'
            }
          }
        },
        title: {
          display: true,
          text: 'Monthly Revenue Comparison',
          font: {
            size: 16,
            family: 'Outfit',
            weight: '600'
          },
          padding: {
            top: 10,
            bottom: 20
          }
        },
        tooltip: {
          backgroundColor: 'rgba(0, 0, 0, 0.8)',
          padding: 12,
          titleFont: {
            size: 14,
            family: 'Outfit'
          },
          bodyFont: {
            size: 13,
            family: 'Outfit'
          },
          usePointStyle: true,
          callbacks: {
            label: function(context) {
              let label = context.dataset.label || '';
              if (label) {
                label += ': ';
              }
              label += '$' + context.parsed.y.toLocaleString();
              return label;
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: {
            color: 'rgba(0, 0, 0, 0.05)',
          },
          ticks: {
            font: {
              size: 11,
              family: 'Outfit'
            },
            callback: function(value) {
              return '$' + value.toLocaleString();
            }
          }
        },
        x: {
          grid: {
            display: false
          },
          ticks: {
            font: {
              size: 11,
              family: 'Outfit'
            }
          }
        }
      },
      interaction: {
        intersect: false,
        mode: 'index'
      }
    }
  };

  // Create the chart
  const myChart = new Chart(ctx, config);

  // Chart.js Pie Chart Implementation
  const ctx2 = document.getElementById('chart2');
  
  // Dummy data for pie chart
  const pieData = {
    labels: ['Electronics', 'Clothing', 'Food & Beverage', 'Home & Garden', 'Sports'],
    datasets: [{
      label: 'Sales by Category',
      data: [3500, 2800, 4200, 1900, 2600],
      backgroundColor: [
        'rgba(59, 130, 246, 0.8)',   // Blue
        'rgba(14, 165, 233, 0.8)',   // Sky Blue
        'rgba(34, 197, 94, 0.8)',    // Green
        'rgba(168, 85, 247, 0.8)',   // Purple
        'rgba(251, 146, 60, 0.8)',   // Orange
      ],
      borderColor: [
        'rgb(59, 130, 246)',
        'rgb(14, 165, 233)',
        'rgb(34, 197, 94)',
        'rgb(168, 85, 247)',
        'rgb(251, 146, 60)',
      ],
      borderWidth: 2,
      hoverOffset: 10
    }]
  };

  const pieConfig = {
    type: 'pie',
    data: pieData,
    options: {
      responsive: true,
      maintainAspectRatio: true,
      plugins: {
        legend: {
          display: true,
          position: 'bottom',
          labels: {
            usePointStyle: true,
            padding: 15,
            font: {
              size: 12,
              family: 'Outfit'
            },
            generateLabels: function(chart) {
              const data = chart.data;
              if (data.labels.length && data.datasets.length) {
                return data.labels.map((label, i) => {
                  const dataset = data.datasets[0];
                  const value = dataset.data[i];
                  const total = dataset.data.reduce((acc, val) => acc + val, 0);
                  const percentage = ((value / total) * 100).toFixed(1);
                  return {
                    text: `${label} (${percentage}%)`,
                    fillStyle: dataset.backgroundColor[i],
                    hidden: false,
                    index: i
                  };
                });
              }
              return [];
            }
          }
        },
        title: {
          display: true,
          text: 'Sales Distribution by Category',
          font: {
            size: 16,
            family: 'Outfit',
            weight: '600'
          },
          padding: {
            top: 10,
            bottom: 20
          }
        },
        tooltip: {
          backgroundColor: 'rgba(0, 0, 0, 0.8)',
          padding: 12,
          titleFont: {
            size: 14,
            family: 'Outfit'
          },
          bodyFont: {
            size: 13,
            family: 'Outfit'
          },
          callbacks: {
            label: function(context) {
              const label = context.label || '';
              const value = context.parsed;
              const total = context.dataset.data.reduce((acc, val) => acc + val, 0);
              const percentage = ((value / total) * 100).toFixed(1);
              return `${label}: $${value.toLocaleString()} (${percentage}%)`;
            }
          }
        }
      }
    }
  };

  // Create the pie chart
  const myPieChart = new Chart(ctx2, pieConfig);
});