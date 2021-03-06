<div class="container-fluid">
  <div class="row">
    <?php include('./view/include/_navbar_admin.php'); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
        </div>
        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
        </div>
      </div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <h2>All Activity</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Date</th>
              <th>Name</th>
              <th>Activity</th>
              <th>Time (Min)</th>
              <th>status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT a.*,u.firstname,u.lastname FROM UserActivities a
                    LEFT JOIN UserProfile u ON(a.userProfileID = u.id)
                    WHERE a.is_deleted = 0 and u.is_deleted = 0  ORDER BY a.userProfileID,a.DATE DESC";
            $n = 0;
            $result_ac = $conn->query($sql);
            if ($result_ac->num_rows > 0) {
              while ($row = $result_ac->fetch_assoc()) {
            ?>
                <td><?php echo ++$n; ?></td>
                <td><?php echo $row["date"]; ?></td>
                <td><?php echo $row["firstname"]; ?>  <?php echo $row["lastname"]; ?></td>
                <td><?php echo $row["activity"]; ?></td>
                <td><?php echo $row["time"]; ?></td> 
                <td>
                  <div class="btn-group">
                    <?php if ($row["is_done"] == 0) { ?>
                      <a href="#">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Done</button>
                      </a>
                    <?php

                    } else {
                    ?>
                      <a href="#">
                        <button type="button" disabled class="btn btn-sm btn-outline-secondary">Complete</button>
                      </a>
                    <?php
                    }
                    ?>

                  </div>
                </td>
                </tr>
              <?php
              }
            } else {
              ?>
              <tr>
                <td colspan="5"> No results</td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>

      <h2>Overview Weight & Muscle mass</h2> 
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Date</th>
              <th>Weight</th>
              <th>WE up/down</th>
              <th>Muscle mass</th>
              <th>MA up/down</th> 
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT a.*,u.firstname,u.lastname FROM UserActivities a
                    LEFT JOIN UserProfile u ON(a.userProfileID = u.id)
                    WHERE a.is_deleted = 0 and u.is_deleted = 0 and is_event = 1
                    ORDER BY a.userProfileID,a.DATE DESC"; 
            $n = 0;
            $result_ac = $conn->query($sql);
            if ($result_ac->num_rows > 0) {
              while ($row = $result_ac->fetch_assoc()) {
            ?>
                <td><?php echo ++$n; ?></td>
                <td><?php echo $row["firstname"]; ?>  <?php echo $row["lastname"]; ?></td>
                <td><?php echo $row["date"]; ?></td>
                <td><?php echo $row["weight"]; ?></td>
                <td><?php echo check_up_down($row["old_weight"],$row["weight"]); ?></td> 
                <td><?php echo $row["muscle_mass"]; ?></td> 
                <td><?php echo check_up_down($row["old_muscle_mass"],$row["muscle_mass"]); ?></td> 
                </tr>
              <?php
              }
            } else {
              ?>
              <tr>
                <td colspan="5"> No results</td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
      
    </main>
  </div>
</div>


<?php 

function check_up_down($old,$new){
  if($new > $old){
    return 'ขึ้น';
  }else if($new < $old){
    return 'ลง';
  }else{
    return 'เท่าเดิม';
  }
}

?>