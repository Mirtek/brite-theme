<?php 
      $table = get_sub_field( 'pricing_table_platinum' );
      if ( ! empty ( $table ) ) {
          $first_header_flag = true;

          echo '<table class="table-plans table-plans_desktop table-plans_platinum">';

              echo '<tbody>';
              if ( ! empty( $table['header'] ) ) {


                      echo '<tr>';

                          foreach ( $table['header'] as $th ) {
                            if ($first_header_flag) {
                              echo '<th rowspan=3>';
                                  echo $th['c'];
                              echo '</th>';
                              $first_header_flag=false;
                            }
                            else {
                              echo '<th>';
                                  echo $th['c'];
                              echo '</th>';
                            }


                          }

                      echo '</tr>';

              }

                  foreach ( $table['body'] as $tr ) {
                    $first_in_row=true;
                      echo '<tr>';

                          foreach ( $tr as $td ) {
                              if ($td['c']) {
                                # code...
                                if ($first_in_row) {
                                  echo '<th>';
                                      echo $td['c'];
                                  echo '</th>';

                                } else {
                                  echo '<td>';
                                      echo $td['c'];
                                  echo '</td>';                                        
                                }
                                $first_in_row=false;
                              }

                          }

                      echo '</tr>';
                  }

              echo '</tbody>';

          echo '</table>';
      }
?>