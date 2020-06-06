<?php
echo "string";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
            function myFunction() {
              // Declare variables
              var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toLowerCase();
              table = document.getElementById("pro_name");//id name of table
              tr = table.getElementsByTagName("tr");

              // Loop through all table rows, and hide those who don't match the search query
              for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                  txtValue = td.textContent || td.innerText;
                  if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
            </script>
</head>
<body>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Product names..">
</body>
</html>