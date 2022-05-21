$(function() {
	"use strict";


// chart 10
var options = {
    series: [{
        name: "Returning Visitors",
        data: [340, 278, 857, 414, 555, 567, 901, 555, 257, 560, 671, 414]
    },{
        name: "Old Visitors",
        data: [240, 660, 171, 257, 160, 671, 340, 594, 555, 632, 901, 555]
    }],
    chart: {
        type: "bar",
       // width: 130,
	    //stacked: true,
        height: 260,
        toolbar: {
            show: !1
        },
        zoom: {
            enabled: !1
        },
        dropShadow: {
            enabled: 0,
            top: 3,
            left: 14,
            blur: 4,
            opacity: .12,
            color: "#3461ff"
        },
        sparkline: {
            enabled: !1
        }
    },
    markers: {
        size: 0,
        colors: ["#3461ff"],
        strokeColors: "#fff",
        strokeWidth: 2,
        hover: {
            size: 7
        }
    },
    plotOptions: {
        bar: {
            horizontal: !1,
            columnWidth: "45%",
            endingShape: "rounded"
        }
    },
    dataLabels: {
        enabled: !1
    },
    stroke: {
        show: !0,
        width: 1.5,
		colors: ["#fff"],
        curve: "smooth"
    },
    colors: ["#3461ff", "#c1cfff"],
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
    },
	responsive: [
		{
		  breakpoint: 1000,
		  options: {
			chart: {
				type: "bar",
			   // width: 130,
				stacked: true,
			}
		  }
		}
	  ],
	legend: {
		show: false
	  },
    tooltip: {
        theme: "dark"        
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart10"), options);
  chart.render();



    
   // chart 11

   var options = {
	chart: {
	  height: 240,
	  type: 'radialBar',
	  toolbar: {
		show: false
	  }
	},
	plotOptions: {
	  radialBar: {
		//startAngle: -135,
		//endAngle: 225,
		 hollow: {
		  margin: 0,
		  size: '80%',
		  background: 'transparent',
		  image: undefined,
		  imageOffsetX: 0,
		  imageOffsetY: 0,
		  position: 'front',
		  dropShadow: {
			enabled: false,
			top: 3,
			left: 0,
			blur: 4,
			color: 'rgba(0, 169, 255, 0.85)',
			opacity: 0.65
		  }
		},
		track: {
		  background: '#eee',
		  strokeWidth: '67%',
		  margin: 0, // margin is in pixels
		  dropShadow: {
			enabled: false,
			top: -3,
			left: 0,
			blur: 4,
			color: 'rgba(0, 169, 255, 0.85)',
			opacity: 0.65
		  }
		},

		dataLabels: { 
		  showOn: 'always',
		  name: {
			offsetY: -20,
			show: true,
			color: '#212529',
			fontSize: '14px'
		  },
		  value: {
			formatter: function (val) {
					  return val + "%";
				  },
			color: '#212529',
			fontSize: '35px',
			show: true,
			offsetY: 10,
		  }
		}
	  }
	},
	fill: {
	  type: 'gradient',
	  gradient: {
		shade: 'light',
		type: 'horizontal',
		shadeIntensity: 0.5,
		gradientToColors: ['#3461ff'],
		inverseColors: false,
		opacityFrom: 1,
		opacityTo: 1,
		stops: [0, 100]
	  }
	},
	colors: ["#3461ff"],
	series: [55],
	stroke: {
	  lineCap: 'round',
	  //dashArray: 4
	},
	labels: ['Server Load'],
	responsive: [
		{
		  breakpoint: 1281,
		  options: {
			chart: {
				height: 220,
			}
		  }
		}
	  ],

  }
  var chart = new ApexCharts(
	document.querySelector("#chart11"),
	options
  );

  chart.render();



  
   // chart 12
   var options = {
	chart: {
	  height: 240,
	  type: 'radialBar',
	  toolbar: {
		show: false
	  }
	},
	plotOptions: {
	  radialBar: {
		//startAngle: -135,
		//endAngle: 225,
		 hollow: {
		  margin: 0,
		  size: '80%',
		  background: 'transparent',
		  image: undefined,
		  imageOffsetX: 0,
		  imageOffsetY: 0,
		  position: 'front',
		  dropShadow: {
			enabled: false,
			top: 3,
			left: 0,
			blur: 4,
			color: 'rgba(0, 169, 255, 0.85)',
			opacity: 0.65
		  }
		},
		track: {
		  background: '#eee',
		  strokeWidth: '67%',
		  margin: 0, // margin is in pixels
		  dropShadow: {
			enabled: false,
			top: -3,
			left: 0,
			blur: 4,
			color: 'rgba(0, 169, 255, 0.85)',
			opacity: 0.65
		  }
		},

		dataLabels: { 
		  showOn: 'always',
		  name: {
			offsetY: -20,
			show: true,
			color: '#212529',
			fontSize: '14px'
		  },
		  value: {
			formatter: function (val) {
					  return val + "%";
				  },
			color: '#212529',
			fontSize: '35px',
			show: true,
			offsetY: 10,
		  }
		}
	  }
	},
	fill: {
	  type: 'gradient',
	  gradient: {
		shade: 'light',
		type: 'horizontal',
		shadeIntensity: 0.5,
		gradientToColors: ['#3461ff'],
		inverseColors: false,
		opacityFrom: 1,
		opacityTo: 1,
		stops: [0, 100]
	  }
	},
	colors: ["#3461ff"],
	series: [64],
	stroke: {
	  lineCap: 'round',
	  //dashArray: 4
	},
	labels: ['Bandwidth'],
	responsive: [
		{
		  breakpoint: 1281,
		  options: {
			chart: {
				height: 220,
			}
		  }
		}
	  ],

  }

  var chart = new ApexCharts(
	document.querySelector("#chart12"),
	options
  );

  chart.render();



  
   // chart 13
   var options = {
	chart: {
	  height: 240,
	  type: 'radialBar',
	  toolbar: {
		show: false
	  }
	},
	plotOptions: {
	  radialBar: {
		//startAngle: -135,
		//endAngle: 225,
		 hollow: {
		  margin: 0,
		  size: '80%',
		  background: 'transparent',
		  image: undefined,
		  imageOffsetX: 0,
		  imageOffsetY: 0,
		  position: 'front',
		  dropShadow: {
			enabled: false,
			top: 3,
			left: 0,
			blur: 4,
			color: 'rgba(0, 169, 255, 0.85)',
			opacity: 0.65
		  }
		},
		track: {
		  background: '#eee',
		  strokeWidth: '67%',
		  margin: 0, // margin is in pixels
		  dropShadow: {
			enabled: false,
			top: -3,
			left: 0,
			blur: 4,
			color: 'rgba(0, 169, 255, 0.85)',
			opacity: 0.65
		  }
		},

		dataLabels: { 
		  showOn: 'always',
		  name: {
			offsetY: -20,
			show: true,
			color: '#212529',
			fontSize: '14px'
		  },
		  value: {
			formatter: function (val) {
					  return val + "%";
				  },
			color: '#212529',
			fontSize: '35px',
			show: true,
			offsetY: 10,
		  }
		}
	  }
	},
	fill: {
	  type: 'gradient',
	  gradient: {
		shade: 'light',
		type: 'horizontal',
		shadeIntensity: 0.5,
		gradientToColors: ['#3461ff'],
		inverseColors: false,
		opacityFrom: 1,
		opacityTo: 1,
		stops: [0, 100]
	  }
	},
	colors: ["#3461ff"],
	series: [78],
	stroke: {
	  lineCap: 'round',
	  //dashArray: 4
	},
	labels: ['Disksapce'],
	responsive: [
		{
		  breakpoint: 1281,
		  options: {
			chart: {
				height: 220,
			}
		  }
		}
	  ],

  }

  var chart = new ApexCharts(
	document.querySelector("#chart13"),
	options
  );

  chart.render();




// chart 14
var options = {
	series: [{
		name: "Total Clicks",
		data: [0, 160, 671, 414, 555, 257, 901, 613, 727, 414, 555, 0]
	}],
	chart: {
		type: "area",
		//width: 130,
		height: 80,
		toolbar: {
			show: !1
		},
		zoom: {
			enabled: !1
		},
		dropShadow: {
			enabled: 0,
			top: 3,
			left: 14,
			blur: 4,
			opacity: .12,
			color: "#3361ff"
		},
		sparkline: {
			enabled: !0
		}
	},
	markers: {
		size: 0,
		colors: ["#3361ff"],
		strokeColors: "#fff",
		strokeWidth: 2,
		hover: {
			size: 7
		}
	},
	plotOptions: {
		bar: {
			horizontal: !1,
			columnWidth: "35%",
			endingShape: "rounded"
		}
	},
	dataLabels: {
		enabled: !1
	},
	stroke: {
		show: !0,
		width: 2.5,
		curve: "straight"
	},
	xaxis: {
		categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
	},
	fill: {
		type: 'gradient',
		gradient: {
		  shade: 'light',
		  type: 'horizontal',
		  shadeIntensity: 0.5,
		  gradientToColors: ['#3461ff'],
		  inverseColors: false,
		  opacityFrom: 1,
		  opacityTo: 1,
		  stops: [0, 100]
		}
	  },
	colors: ["#3461ff"],
	tooltip: {
		theme: "dark",
		fixed: {
			enabled: !1
		},
		x: {
			show: !1
		},
		y: {
			title: {
				formatter: function(e) {
					return ""
				}
			}
		},
		marker: {
			show: !1
		}
	}
  };

  var chart = new ApexCharts(document.querySelector("#chart14"), options);
  chart.render();




// chart 15
var options = {
	series: [{
		name: "Sales",
		data: [300, 555, 257, 901, 613, 727, 314]
	}],
	chart: {
		type: "area",
		//width: 130,
		height: 160,
		toolbar: {
			show: !1
		},
		zoom: {
			enabled: !1
		},
		dropShadow: {
			enabled: 0,
			top: 3,
			left: 14,
			blur: 4,
			opacity: .12,
			color: "#3361ff"
		},
		sparkline: {
			enabled: !1
		}
	},
	markers: {
		size: 0,
		colors: ["#3361ff"],
		strokeColors: "#fff",
		strokeWidth: 2,
		hover: {
			size: 7
		}
	},
	plotOptions: {
		bar: {
			horizontal: !1,
			columnWidth: "35%",
			endingShape: "rounded"
		}
	},
	dataLabels: {
		enabled: !1
	},
	stroke: {
		show: !0,
		width: 2.5,
		curve: "straight"
	},
	xaxis: {
		categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
		axisBorder: {
			show: false
		}
	},
	grid: {
		show: !1
	},
	fill: {
		type: 'gradient',
		gradient: {
		  shade: 'light',
		  type: 'vertical',
		  shadeIntensity: 0.5,
		  gradientToColors: ['#3461ff'],
		  inverseColors: false,
		  opacityFrom: 0.5,
		  opacityTo: 0.0,
		  //stops: [0, 100]
		}
	  },
	colors: ["#3461ff"],
	yaxis: {
		show: false
	},
	tooltip: {
		theme: "dark",
		fixed: {
			enabled: !1
		},
		x: {
			show: !1
		},
		y: {
			title: {
				formatter: function(e) {
					return ""
				}
			}
		},
		marker: {
			show: !1
		}
	}
  };

  var chart = new ApexCharts(document.querySelector("#chart15"), options);
  chart.render();





// chart 16
var options = {
	series: [{
		name: "Sessions",
		data: [300, 450, 671, 414, 555, 457, 901, 613, 727, 414, 555, 290]
	}],
	chart: {
		type: "bar",
		//width: 130,
		height: 80,
		toolbar: {
			show: !1
		},
		zoom: {
			enabled: !1
		},
		dropShadow: {
			enabled: 0,
			top: 3,
			left: 14,
			blur: 4,
			opacity: .12,
			color: "#3361ff"
		},
		sparkline: {
			enabled: !0
		}
	},
	markers: {
		size: 0,
		colors: ["#3361ff"],
		strokeColors: "#fff",
		strokeWidth: 2,
		hover: {
			size: 7
		}
	},
	plotOptions: {
		bar: {
			horizontal: !1,
			columnWidth: "35%",
			endingShape: "rounded"
		}
	},
	dataLabels: {
		enabled: !1
	},
	stroke: {
		show: !0,
		width: 2.5,
		curve: "smooth"
	},
	xaxis: {
		categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
	},
	fill: {
		type: 'gradient',
		gradient: {
		  shade: 'light',
		  type: 'horizontal',
		  shadeIntensity: 0.5,
		  gradientToColors: ['#3461ff'],
		  inverseColors: false,
		  opacityFrom: 1,
		  opacityTo: 1,
		  stops: [0, 100]
		}
	  },
	colors: ["#3461ff"],
	tooltip: {
		theme: "dark",
		fixed: {
			enabled: !1
		},
		x: {
			show: !1
		},
		y: {
			title: {
				formatter: function(e) {
					return ""
				}
			}
		},
		marker: {
			show: !1
		}
	}
  };

  var chart = new ApexCharts(document.querySelector("#chart16"), options);
  chart.render();











    
});