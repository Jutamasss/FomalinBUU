<div class="content">
    <div class="row">
        <div class="col">
            <h3 id="name_table" style="margin : 0 auto !important;padding-left: 3px !important;padding-bottom: 10px; float:left; font-family: 'Prompt', sans-serif !important;"></h3>
        </div>
        <div class="col-md-12">
            <button class="btn btn-info" style="margin-top: 2px; float:right; border-radius: 5px;" onclick="location.href='#'">เพิ่มร้านอาหาร</button>
            <button class="btn btn-info" style="margin-top: 2px; float:right; border-radius: 5px;" onclick="location.href='#'">วิธีการอัพโหลดไฟล์</button>
            <div><button class="btn btn-success" style="margin-top: 2px; float:right; border-radius: 5px;" onclick="location.href='#'">อัพโหลดไฟล์ร้านอาหาร excel </button></div>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">สถานะร้านอาหาร</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">ไม่ผ่านเกณฑ์</a>
                    <a href="#">รอบตรวจสอบ</a>
                    <a href="#">ผ่านเกณฑ์</a>
                </div>
            </div>
        </div>
        <div class="col">
        <!-- action="</?php echo base_url() . 'Admin/Manage_company/Admin_approval_company/show_data_approve'; ?>" -->
                 <form class="form-inline custom-form-search " action="<?php echo base_url() . '#'; ?>" method="POST">
                     <div class="input-group ">
                         <input type="text" value="" id="search_box" name="value_search" class="form-control custom-search" placeholder="  ค้นหาชื่อได้ที่นี่...">
                     </div>
                 </form>
             </div>
    </div>


    <div class="card-body">
        <div class="tab-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped " style="text-align: center;">
                                <thead class="text-white" style="background-color: #e4a487; text-align: center;">
                                    <tr>

                                        <th>รหัส</th>
                                        <th>ชื่อร้านอาหาร</th>
                                        <th>เจ้าของ</th>
                                        <th>ที่อยู่</th>
                                        <th>สถานะรูปภาพ</th>
                                        <th>ดำเนินการ</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <?php if (sizeof($arr_res) == 0) {
                                        echo "<td colspan = '4'>";
                                        echo "ไม่มีข้อมูลในตารางนี้";
                                        echo "</td>";
                                    } else {
                                        for ($i = 0; $i < count($arr_res); $i++) { ?>
                                            <tr>
                                                <td class="res-hide"><?php echo $arr_res[$i]->res_code; ?></td>
                                                <td style="text-align: left;"><?php echo $arr_res[$i]->res_name; ?></td>
                                                <td style="text-align: left;"><?php echo $arr_res[$i]->ent_firstname . ' ' . $arr_res[$i]->ent_lastname; ?></td>
                                                <td style="text-align: left;"><?php echo $arr_res[$i]->res_location; ?></td>
                                                <td style="text-align: left;color:red"><?php echo "no data in table" ?></td>
                                                <td><button class="btn btn-info" style="font-size:10px; padding:12px;">
                                                        <span class="material-icons">camera</span>
                                                        <button class="btn btn-info" style="font-size:10px; padding:12px;">
                                                            <span class="material-icons">search</span>
                                                        </button></td>
                                                <!-- </?php if ($arr_company[$i]->com_status == 1) { ?>
                                                    <td style="color: #fba004;">รออนุมัติ</td>
                                                    <td style='text-align: center;'>
                                                        <button class="btn btn-info" style="font-size:10px; padding:12px;" onclick="location.href='</?php echo site_url() . 'Entrepreneur/Manage_company/Company_detail/show_detail_company/' . $arr_company[$i]->com_id; ?>'" title="ดูรายละเอียดสถานที่">
                                                            <span class="material-icons">search</span>
                                                        </button>
                                                        <button class="btn btn-warning" style="font-size:10px; padding:12px;" onclick="location.href='</?php echo site_url() . 'Entrepreneur/Manage_company/Company_edit/show_edit_company/' . $arr_company[$i]->com_id; ?>'" title="แก้ไขข้อมูลสถานที่">
                                                            <span class="material-icons">edit</span>
                                                        </button>
                                                        <button class="btn btn-danger" style="font-size:10px; padding:12px;" onclick="confirm_delete('</?php echo $arr_company[$i]->com_name ?>', </?php echo $arr_company[$i]->com_id ?>)" title="ลบสถานที่">
                                                            <span class="material-icons">delete</span>
                                                        </button>
                                                    </td>
                                                </?php } ?> -->
                                                <!-- </?php if ($arr_company[$i]->com_status == 2) { ?>
                                                    <td style="color: #669900;">อนุมัติ</td>
                                                    <td style='text-align: center;'>
                                                        <button class="btn btn-info" style="font-size:10px; padding:12px;" onclick="location.href='</?php echo site_url() . 'Entrepreneur/Manage_company/Company_detail/show_detail_company/' . $arr_company[$i]->com_id; ?>'" title="ดูรายละเอียดสถานที่">
                                                            <span class="material-icons">search</span>
                                                        </button>
                                                        <button class="btn btn-warning" style="font-size:10px; padding:12px;" onclick="location.href='</?php echo site_url() . 'Entrepreneur/Manage_company/Company_edit/show_edit_company/' . $arr_company[$i]->com_id; ?>'" title="แก้ไขข้อมูลสถานที่">
                                                            <span class="material-icons">edit</span>
                                                        </button>
                                                        <button class="btn btn-danger" style="font-size:10px; padding:12px;" onclick="confirm_delete('</?php echo $arr_company[$i]->com_name ?>', </?php echo $arr_company[$i]->com_id ?>)" title="ลบสถานที่">
                                                            <span class="material-icons">delete</span>
                                                        </button>
                                                    </td>
                                                </?php } ?> -->
                                                <!-- </?php if ($arr_company[$i]->com_status == 3) { ?>
                                                    <td style="color: red;">ปฏิเสธ</td>
                                                    <td style='text-align: center;'>
                                                        <button class="btn btn-info" style="font-size:10px; padding:12px;" onclick="location.href='</?php echo site_url() . 'Entrepreneur/Manage_company/Company_detail/show_detail_company/' . $arr_company[$i]->com_id; ?>'" title="ดูรายละเอียดสถานที่">
                                                            <span class="material-icons">search</span>
                                                        </button>
                                                    </td>
                                                </?php } ?> -->
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                                <!-- <tbody class="list">

                                    <tr>
                                        
                                        <td>K01</td>
                                        <td>ชื่อร้านอาหาร</td>
                                        <td>เจ้าของ</td>
                                        <td>ที่อยู่</td>
                                        <td>ยังไม่เพิ่ม</td>
                                        <td><button class="btn btn-info" style="font-size:10px; padding:12px;">
                                                <span class="material-icons">camera</span>
                                                <button class="btn btn-info" style="font-size:10px; padding:12px;">
                                                <span class="material-icons">info</span>
                                            </button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>K02</td>
                                        <td>ชื่อร้านอาหาร</td>
                                        <td>เจ้าของ</td>
                                        <td>ที่อยู่</td>
                                        <td>ยังไม่เพิ่ม</td>
                                        <td> <button class="btn btn-info" style="font-size:10px; padding:12px;">
                                                <span class="material-icons">camera</span>
                                            </button></td>
                                    </tr>
                                </tbody> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Dropdown Button */
    .dropbtn {
        background-color: #3498DB;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* Dropdown button on hover & focus */
    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #2980B9;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd
    }

    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    .show {
        display: block;
    }
</style>
<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>