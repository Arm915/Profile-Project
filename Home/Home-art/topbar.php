<nav class="content">
    <div class="top_bar">
        <div class="profile">
                <img src="" alt="profile" />
            <div>
                <?php 
                if (isset($_SESSION['Id'])) {
                    $Id = $_SESSION['Id'];
                    $sql = "SELECT * FROM regis WHERE Id = '$Id'";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($result)){
                ?>
                    <h1 class="Name"><?php echo $row['username']; ?></h1>
                    <h1 class="Branch"><?php echo $row['Email']; ?></h1>
                <?php 
                    }
                }
                ?>
            </div>
        </div>
    </div>
</nav>