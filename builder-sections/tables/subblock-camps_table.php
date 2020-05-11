  <section class="camps-pricing bg-circles">
    <div class="block-container">
      <h2 class="block-container__heading"><?php the_sub_field('heading'); ?></h2>
      <div class="camps-pricing__table">
        <?php $table = get_sub_field( 'camps_pricing_table_mobile' );

        if ( ! empty ( $table ) ) {

          echo '<table class="table-pricing table-pricing_mobile">';

          if ( ! empty( $table['header'] ) ) {

            echo '<thead>';

            echo '<tr>';

            foreach ( $table['header'] as $th ) {

              echo '<th>';
              echo $th['c'];
              echo '</th>';
            }

            echo '</tr>';

            echo '</thead>';
          }

          echo '<tbody>';

          foreach ( $table['body'] as $tr ) {

            echo '<tr>';

            foreach ( $tr as $td ) {

              echo '<td>';
              echo $td['c'];
              echo '</td>';
            }

            echo '</tr>';
          }

          echo '</tbody>';

          echo '</table>';
        }
        ?>
        <?php 
        $table2 = get_sub_field( 'camps_pricing_table' );

        if ( ! empty ( $table ) ) {

          echo '<table class="table-pricing table-pricing_desktop">';

          if ( ! empty( $table2['header'] ) ) {

            echo '<thead>';

            echo '<tr>';

            foreach ( $table2['header'] as $th ) {

              echo '<th>';
              echo $th['c'];
              echo '</th>';
            }

            echo '</tr>';

            echo '</thead>';
          }

          echo '<tbody>';

          foreach ( $table2['body'] as $tr ) {

            echo '<tr>';

            foreach ( $tr as $td ) {

              echo '<td>';
              echo $td['c'];
              echo '</td>';
            }

            echo '</tr>';
          }

          echo '</tbody>';

          echo '</table>';
        } ?>

      </div>
    </div>
  </section>