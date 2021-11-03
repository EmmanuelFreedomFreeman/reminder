<table class="table table-bordered table2excel table2excel_with_colors">
    <thead>
      <tr>
        <th>N*</th>
        <th>JOB CARD N*</th>
        <th>DATE ARRIVED</th>
        <th>CUSTOMER</th>
        <th>CONTACT</th>
        <th>RADIATOR MOD</th>
        <th>JOB TO BE DONE</th>
        <th>TIME TO BE DONE</th>
        <th>DATE TO BE COLLECTED</th>
      </tr>
    </thead>
    <tbody id='add_it'>
      
      
    </tbody>
  </table>
  <button class="exportToExcel">Export to XLS</button>

  
  <script>

//////////////////////////////////  get data from the json php echo file //////////////////////////////

    const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
          const myObj = JSON.parse(this.responseText);
          
          $.each(myObj.reverse(), function( index, value ) {
            
              var input = `
                    <tr>
                        <td>${index+1}</td>
                        <td>${value.jc_num}</td>
                        <td>${value.date_arrive}</td>
                        <td>${value.customer}</td>
                        <td>${value.contact}</td>
                        <td>${value.radiator_model}</td>
                        <td>${value.job}</td>
                        <td>${value.date_finish}</td>
                        <td>${value.date_collect}</td>
                    </tr>
              `;

              $('#add_it').append(input)


          });
        }
        xmlhttp.open("GET", "./data_json.php");
        xmlhttp.send();


//////////////////////////////////   end code get data from the json php echo file //////////////////////////////




//////////////////////////////////     export data to excel //////////////////////////////



			$(function() {
				$(".exportToExcel").click(function(e){
					var table = $(this).prev('.table2excel');
					if(table && table.length){
						var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
						$(table).table2excel({
							exclude: ".noExl",
							name: "Excel Document Name",
							filename: "dorime radiators" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
							fileext: ".xls",
							exclude_img: true,
							exclude_links: true,
							exclude_inputs: true,
							preserveColors: preserveColors
						});
					}
				});
				
			});


            
//////////////////////////////////   end code  export data to excel //////////////////////////////


		</script>

