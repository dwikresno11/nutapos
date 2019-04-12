<table id="jadwal" class="table display table-striped" style="">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Mulai</th>
                      <th>Selesai</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php for ($i=8; $i < 22 ; $i++) {
                      if(isset($_POST['tanggal']) && $_POST['tanggal']==date('Y-m-d')){
                        if((date('H')+4)>$i){
                          echo "<tr style='background-color: #919297'>";
                          echo "<td><input type='text' value='".$i."'/></td>";
                          echo "<td>".$i.":00</td>";
                          echo "<td>".($i+1).":00</td>";
                          echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='expired' style='height:35px'></td>";
                          echo "</tr>";
                        }else{
                          if(in_array($i, $jam)){
                            echo "<tr style='background-color: #919297'>";
                            echo "<td><input type='text' value='".$i."'/></td>";
                            echo "<td>".$i.":00</td>";
                            echo "<td>".($i+1).":00</td>";
                            echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='Booked' style='height:35px'></td>";
                            echo "</tr>";
                          }else{
                            echo "<tr id='".$i."'>";
                            echo "<td><input type='text' value='".$i."'/></td>";
                            echo "<td>".$i.":00</td>";
                            echo "<td>".($i+1).":00</td>";
                            echo "<td id='".$i."'><input class='btn btn-primary px-4' data-target='".$i."' type='button' style='height:35px'></td>";
                            echo "</tr>";
                          }
                        }
                      }else if(isset($_POST['tanggal']) && $_POST['tanggal']>date('Y-m-d')){
                        if(in_array($i, $jam)){
                          foreach ($jadwal as $value) {
                            if($value->jam_mulai==$i && $value->tanggal==$_POST['tanggal']){
                              if($value->status=='pending'){
                                echo "<tr style='background-color: #919297'>";
                                echo "<td><input type='text' value='".$i."'/></td>";
                                echo "<td>".$i.":00</td>";
                                echo "<td>".($i+1).":00</td>";
                                echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='Pending' style='height:35px'></td>";
                              }else if($value->status=='booked'){
                                echo "<tr style='background-color: #919297'>";
                                echo "<td><input type='text' value='".$i."'/></td>";
                                echo "<td>".$i.":00</td>";
                                echo "<td>".($i+1).":00</td>";
                                echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='Booked' style='height:35px'></td>";
                              }else{
                                echo "<tr id='".$i."'>";
                                echo "<td><input type='text' value='".$i."'/></td>";
                                echo "<td>".$i.":00</td>";
                                echo "<td>".($i+1).":00</td>";
                                echo "<td id='".$i."'><input class='btn btn-primary px-4' value='pesan' data-target='".$i."' type='button' style='height:35px'></td>";
                              }
                            }
                          }
                          echo "</tr>";
                        }else{
                          echo "<tr id='".$i."'>";
                          echo "<td><input type='text' value='".$i."'/></td>";
                          echo "<td>".$i.":00</td>";
                          echo "<td>".($i+1).":00</td>";
                          echo "<td id='".$i."'><input class='btn btn-primary px-4' value='pesan' data-target='".$i."' type='button' style='height:35px'></td>";
                          echo "</tr>";
                        }
                      }
                      else{
                        echo "<tr style='background-color: #919297'>";
                        echo "<td><input type='text' value='".$i."'/></td>";
                        echo "<td>".$i.":00</td>";
                        echo "<td>".($i+1).":00</td>";
                        echo "<td><input disabled class='btn btn-primary px-4' type='submit' value='expired' style='height:35px'></td>";
                        echo "</tr>";
                      }

                    } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                     <th></th>
                     <th>Mulai</th>
                     <th>Selesai</th>
                     <th>Status</th>
                   </tr>
                 </tfoot>
               </table>