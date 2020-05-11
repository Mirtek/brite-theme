<?php 
      $table = get_sub_field( 'pricing_table_mobile' );
      if ( ! empty ( $table ) ) {
          $first_header_flag = true;

          echo '<table class="table-plans table-plans_mobile table-plans_silver">';

              echo '<tbody>';
              if ( ! empty( $table['header'] ) ) {


                      echo '<tr>';

                          foreach ( $table['header'] as $th ) {
                            if ($first_header_flag) {
                              echo '<th colspan=3>';
                                  echo $th['c'];
                              echo '</th>';
                              $first_header_flag=false;
                            }
                            else {
                              if ($th['c']) {                              
                                echo '<th>';
                                    echo $th['c'];
                                echo '</th>';
                              }
                            }


                          }

                      echo '</tr>';

              }

                  $first_in_table=true;
                  $second_in_row=true;
                  $third_in_row=true;

                  foreach ( $table['body'] as $tr ) {
                      $first_in_row=true;

                          foreach ( $tr as $td ) {

                              if ($td['c']) {
                                # code...
                                if ($first_in_table) {
                                  echo '<th colspan=3>';
                                      echo $td['c'];
                                  echo '</th>';
                                  $first_in_table=false;
                                } elseif ($first_in_row) {
                                  echo '<th>';
                                      echo $td['c'];
                                  echo '</th>';
                                  $first_in_row=false;
                                  # code...
                                } elseif ($second_in_row) {
                                  echo '<th>';
                                      echo $td['c'];
                                  echo '</th>';
                                  $second_in_row = false;
                                } elseif ($third_in_row) {
                                  echo '<th>';
                                      echo $td['c'];
                                  echo '</th>';
                                  $third_in_row = false;
                                } else {
                                  echo '<td>';
                                      echo $td['c'];
                                  echo '</td>';                                        
                                }
//                                $first_in_row=false;
                              }

                        }

                      echo '</tr>';
                  }

              echo '</tbody>';

          echo '</table>';
      }
?>