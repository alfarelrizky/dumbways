<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">
        <?php
            if (ucfirst($this->uri->segment(2)) == "") {
                echo "LIST DATA";
            }else{
                $mulai =2;
                $key   ="ada";
                while ($key == "ada") {
                    if (ucfirst($this->uri->segment($mulai)) <> "") {
                        echo ucfirst($this->uri->segment($mulai))."/";
                    }else{
                        $key = "";
                    }
                    $mulai++;
                }
            }
        ?>
    </li>
</ol>