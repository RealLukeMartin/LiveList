<?php $page_title = 'LiveList - Customer Data Manager' ?>
<?php include_once 'includes/header.php'; ?>
            <div class="row">
                <a class='btn btn-primary' href='login.php'>Login</a>
                <a class='btn btn-danger' href='register.php'>Register</a>
                <h3 class="logo">LiveList</h3>

            </div>
              <div class="row">

                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th>Mobile Number</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'config/database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM customers ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['mobile'] . '</td>';
                            echo '<td width=250>';
                              echo '<a class="btn btn-primary" href="read.php?id='.$row['id'].'">View</a>';
                              echo ' ';
                              echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Edit</a>';
                              echo ' ';
                              echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Remove</a>';
                            echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
                  <p>
                    <a href="create.php" class="btn btn-success add-new">Add New Customer</a>
                    <div class="clear"></div>
                  </p>
        </div>
<?php include_once 'includes/footer.php' ?>
