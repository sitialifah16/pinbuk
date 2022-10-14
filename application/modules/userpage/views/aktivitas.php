 <!--event calender-->
 <section class="pt100 pb100">
     <div class="container">
         <div class="section_title mb50">
             <h3 class="title">
                 Aktivitas
             </h3>
         </div>
         <div class="table-responsive">
             <table class="event_calender table">
                 <thead class="event_title">
                     <tr>
                         <th>
                             <i class="ion-ios-calendar-outline"></i>
                             <span>Workshop</span>
                         </th>
                         <th></th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php if ($av_activity == FALSE) { ?>
                         <tr>
                             <td>
                                 <div class="event_place">
                                     <h5>You haven't registered any workshop yet.</h5>
                                 </div>
                             </td>
                             <td></td>
                         </tr>
                     <?php }else{ ?>
                     <?php
                        foreach ($activity as $a) {
                        ?>
                         <tr>
                             <td class="event_date">
                                 <?php
                                    $tgl_mulai = $a->date_mulai;
                                    $tgl_selesai = $a->date_selesai;
                                    $dm =  explode(" ", $tgl_mulai);
                                    $ds =  explode(" ", $tgl_selesai);
                                    echo $dm[0] . " - " . $ds[0];
                                    ?>
                                 <span><?php echo $dm[1]; ?></span>
                             </td>
                             <td>
                                 <div class="event_place">
                                     <h5><?php echo $a->nama ?></h5>
                                     <h6><?php echo $a->jam_mulai ?> - selesai</h6>                                     
                                         <h6>Status :
                                         <?php
                                            $status = $a->status;
                                            if ($status == 0) {
                                                echo " <span style='background-color: #ff9800;color: white;'>added to waiting list</span>";
                                            } else if ($status == 1){
                                                echo " <span style='background-color: #4CAF50;color: white;'>verified by admin</span>";
                                            } else{
                                                echo " <span style='background-color: #f44336;color: white;'>rejected</span>";
                                            }
                                            ?>     
                                            </h6>                                
                                 </div>
                             </td>
                         </tr>
                     <?php
                        }
                    }
                        ?>
                 </tbody>
             </table>
         </div>
     </div>
 </section>
 <!--event calender end -->