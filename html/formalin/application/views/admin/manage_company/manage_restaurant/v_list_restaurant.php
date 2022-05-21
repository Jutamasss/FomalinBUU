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
                                </tbody>
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