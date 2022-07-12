<?php
                            include 'db.php';
                            $output = '';
                        if(isset($_POST["export"]))
                        {
                         $query = "SELECT * FROM registration_form";
                         $result = mysqli_query($conn, $query);
                         if(mysqli_num_rows($result) > 0)
                         {
                          $output .= '
                           <table class="table" bordered="1" class="table table-striped table-bordered table-hover" id="dataTables-example">  
                                            <tr>  
                                                <th>S.No</th>
                                    <th>Film Name</th>
                                    <th>Category </th>
                                    <th>Production Date</th>
                                    <th>Company</th>
                                    <th>Address</th>
                                    <th>Director Name</th>
                                    <th>Director Ph.</th>
                                    <th>Director Email</th>
                                    <th>Producer Name</th>
                                    <th>Producer Ph.</th>
                                    <th>Producer Email</th>
                                    <th>Entry Date</th>
                                    <th>Transaction No.</th>  
                             
                                            </tr>
                          ';
                          while($row = mysqli_fetch_array($result))
                          {
                           $output .= '
                            <tr>  
                             <td>'.$row["id"].'</td>
                                        <td>'.$row["titles"].'</td>
                                        <td>'.$row["category"].'</td>
                                         <td>'.$row["production_date"].'</td>
                                          <td>'.$row["company"].'</td>
                                          <td>'.$row["address"].'</td>
                                            <td>'.$row["director_information"].'</td>
                                              <td>'.$row["director_telephone"].'</td>
                                                <td>'.$row["director_email"].'></td>
                                                 <td>'.$row["producer_information"].'</td>
                                              <td>'.$row["producer_telephone"].'</td>
                                                <td>'.$row["producer_email"].'</td>
                                                 <td>'.$row["date"].'</td>
                                        <td>'.$row["transaction_no"].'</td>
                                         
                              
                                            </tr>
                           ';
                          }
                          $output .= '</table>';
                          header('Content-Type: application/xls');
                          header('Content-Disposition: attachment; filename=download.xls');
                          echo $output;
                         }
                        }
                        ?>