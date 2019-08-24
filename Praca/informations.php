<div class="content announcements">
    <div class="col-xs-12">
        <?php $query = "SELECT * FROM announcements";
            if ($result = $db->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $title = $row["title"];
                    $content = $row["content"];
                    $content2 = $row["content2"];
                    $content3 = $row["content3"];
                        echo'   <h1 class="margin">' .$title. '</h1>
                                <div class="row">
                                    <div class="col-12 info">
                                        <p>' .$content. '</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 info">
                                        <p>' .$content2. '</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 info">
                                        <p>' .$content3. '</p>
                                    </div>
                                </div>'; 
                }
                    $result->free(); 
            } ?>            
    </div>
</div>