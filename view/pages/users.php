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
        <h1 class="h2">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="<?php echo $config['base_url'] ?>/controller/route.php?route=add_user" rel="noopener noreferrer">
              <button type="button" class="btn btn-sm btn-outline-secondary">Add User</button>
            </a>
          </div>
        </div>
      </div>
      <h2>All users</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Start Day</th>
              <th>Weight</th>
              <th>Muscle</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM UserProfile WHERE is_deleted = 0";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              $n = 0;
              while ($row = $result->fetch_assoc()) {
            ?>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["firstname"]; ?></td>
                <td><?php echo $row["lastname"]; ?></td>
                <td><?php echo $row["startDate"]; ?></td>
                <td><?php echo $row["weight"]; ?></td>
                <td><?php echo $row["muscle"]; ?></td>
                <td>
                  <div class="btn-group">
                    <a href="<?php echo $config['base_url']?>/controller/route.php?route=set_workout&id=<?php echo $row["id"]; ?>">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Set Workout</button>
                    </a>
                    <a href="<?php echo $config['base_url']?>/controller/route.php?route=edit_user&id=<?php echo $row["id"]; ?>">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </a>
                    <a href="<?php echo $config['base_url']?>/controller/deluser_post.php?id=<?php echo $row["id"]; ?>">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Del</button>
                    </a> 
                  </div>
                </td>
                </tr>
              <?php
              }
            } else {
              ?>
              <tr>
                <td colspan="6"> No results</td>
              </tr>
            <?php
            }

            $conn->close();
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>