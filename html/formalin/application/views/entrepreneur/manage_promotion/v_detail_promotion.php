<!-- 
/*
* v_detail_promotion
* Display data detail promotion by entrepreneur
* @input obj_promotiont, arr_image
* @output detail data promotion
* @author Priyarat Bumrungkit 62160156
* @Create Date 2564-10-01
*/ 
-->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!--แสดงชื่อโปรโมชัน-->
                    <div class="card-header"
                        style="background-color: #8fbacb; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2)">
                        <center>
                            <h2 class="card-title text-white" style="font-family: 'Prompt', sans-serif !important;">
                                <?php echo $arr_promotion[0]->pro_name; ?></h2>
                        </center>
                    </div><br>

                    <!--แสดงรูปภาพของโปรโมชัน-->
                    <div class="card-body">
                        <div id="carousel_indicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators" style="bottom: 30px !important;">
                                <?php for ($i = 0; $i < count($arr_promotion); $i++) { ?>
                                <?php if ($i == 0) { ?>
                                <li data-target="#carousel_indicators" data-slide-to="<?php echo $i; ?>" class="active">
                                </li>
                                <?php } ?>
                                <?php if ($i != 0) { ?>
                                <li data-target="#carousel_indicators" data-slide-to="<?php echo $i; ?>"></li>
                                <?php } ?>
                                <?php } ?>
                            </ol>
                            <div class="carousel-inner">
                                <?php for ($i = 0; $i < count($arr_promotion); $i++) { ?>
                                <?php if ($i == 0) { ?>
                                <div class="carousel-item image-detail active">
                                    <img class="d-block w-100 image_banner"
                                        src="<?php echo base_url() . 'image_promotions/' . $arr_promotion[$i]->pro_img_path; ?>">
                                </div>
                                <?php } ?>
                                <?php if ($i != 0) { ?>
                                <div class="carousel-item image-detail">
                                    <img class="d-block w-100 image_banner"
                                        src="<?php echo base_url() . 'image_promotions/' . $arr_promotion[$i]->pro_img_path; ?>">
                                </div>
                                <?php } ?>
                                <?php } ?>
                                <br>
                            </div>
                            <a class="carousel-control-prev" href="#carousel_indicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel_indicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        
                        <!--รายละเอียดโปรโมชัน-->
                        <div class="container">
                            <h3 style="font-family: 'Prompt', sans-serif;"><img
                                    src="<?php echo base_url() . 'assets/templete/picture/description.png' ?>"
                                    width="40px"><?php if($arr_promotion[0]->pro_cat_id == 1){
                                                        echo ' รายละเอียดโปรโมชัน';
                                                    }else{
                                                        echo ' รายละเอียดของรางวัล';
                                                    }?> </h3>
                            <hr width="100%" size="10" color="#cccccc">
                            <p style="font-size: 18px; text-indent: 50px;">
                                <?php echo $arr_promotion[0]->pro_description; ?></p>

                        </div>
                        <div class="container">
                            <div class="row">
                                
                                <?php if($arr_promotion[0]->pro_cat_id == 2){?>
                                    <div class="col-5">
                                    <h3><img src="<?php echo base_url() . 'assets/templete/picture/point.png' ?>"
                                            width="40px"> คะแนนของรางวัล</h3>
                                    <hr width="100%" size="10" color="#cccccc">
                                    <p style="font-size: 18px; text-indent: 50px;">
                                        <?php echo $arr_promotion[0]->pro_point; ?> คะเเนน</p>
                                    </div>
                                    <div class="col-2"></div>                       
                                <?php }?>  
                                
                                <!--แสดงประเภทโปรโมชัน-->
                                <div class="col-5">
                                    <h3><img src="<?php echo base_url() . 'assets/templete/picture/category.png' ?>"
                                            width="40px"><?php if($arr_promotion[0]->pro_cat_id == 1){
                                                        echo ' ประเภทโปรชัน';
                                                    }else{
                                                        echo ' ประเภทของรางวัล';
                                                    }?></h3>
                                    <hr width="100%" size="10" color="#cccccc">
                                    <p style="font-size: 18px; text-indent: 50px;">
                                        <?php echo $arr_promotion[0]->pro_cat_name; ?></p>
                                </div>
                            </div>
                        </div><br><br>
                        
                        <!--แสดงระยะเวลาของโปรโมชัน-->
                        <div class="container">
                            <h3><img src="<?php echo base_url() . 'assets/templete/picture/promotion_icon.png' ?>"
                                    width="40px"><?php if($arr_promotion[0]->pro_cat_id == 1){
                                                        echo ' ระยะเวลาโปรชัน';
                                                    }else{
                                                        echo ' ระยะเวลาของรางวัล';
                                                    }?></h3>
                            <hr width="100%" size="10" color="#cccccc">
                            <?php
                            if (!function_exists('month_convert')) {
                                function month_convert($full_date = '')
                                {
                                    $m = substr($full_date, 5, 2);
                                    $m = intval($m);
                                    $arr_month = array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายยน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
                                    return $arr_month[$m - 1];
                                }
                            }
                            if (!function_exists('year_convert')) {
                                function year_convert($full_date = '')
                                {
                                    $y = substr($full_date, 0, 4);
                                    $y = intval($y);
                                    return $y + 543;
                                }
                            }
                            if (!function_exists('full_date_convert')) {
                                function full_date_convert($full_date = '')
                                {
                                    $d = substr($full_date, 8, 2);
                                    $d = intval($d);
                                    return $d . ' ' . month_convert($full_date) . ' ' . year_convert($full_date);
                                }
                            }
                            ?>
                            <p style="font-size: 18px; text-indent: 50px;">วันที่
                                <?php echo full_date_convert($arr_promotion[0]->pro_start_date) ?> -
                                <?php echo full_date_convert($arr_promotion[0]->pro_end_date) ?></p>
                        </div><br><br>
                        <div class="container">
                            <!--แสดงสถานที่ของโปรโมชัน-->
                            <h3><img src="<?php echo base_url() . 'assets/templete/picture/company_icon.png' ?>"
                                    width="40px"> <?php echo $arr_promotion[0]->com_name; ?></h3>
                            <hr width="100%" size="10" color="#cccccc">
                            <ul>
                                <li>
                                    <h4>เบอร์โทรศัพท์: </h4>
                                </li>
                                <p style="font-size: 18px; text-indent: 50px;"><?php echo $arr_promotion[0]->com_tel; ?>
                                </p><br>
                                <!-- รายละเอียดที่อยู่กิจกรรม -->
                                <h4><img src="<?php echo base_url() . 'assets/templete/picture/information-point.png' ?>"
                                    style="width:34px;"> รายละเอียดที่อยู่</h4>
                                <p style="font-size: 18px; text-indent:50px;"><?php echo  $arr_promotion[0]->com_location." จังหวัด.".$arr_promotion[0]->prv_name_th." อำเภอ.".$arr_promotion[0]->dis_name_th." ตำบล.".$arr_promotion[0]->par_name_th." รหัสไปรษณีย์ ".$arr_promotion[0]->par_code ?></p>
                                <br>
                                <h4><img src="<?php echo base_url() . 'assets/templete/picture/location.png' ?>"
                                        width="40px"> ตำแหน่งสถานที่</h4>
                                <table class="table table-responsive">
                                    <tr>
                                        <td style="border: 2px solid black;">
                                            <div id="Map" style="width: 900px; height: 400px;"></div>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
var lat =
'<?= $arr_promotion[0]->com_lat ?>'; //มีการส่งค่าตัวแปร $com_lat php ที่มีการเก็บค่า field lati จากฐานข้อมูลมาเก็บไว้ในตัวแปร lat ของ javascript
var long =
'<?= $arr_promotion[0]->com_lon ?>'; //มีการส่งค่าตัวแปร $com_lon php ที่มีการเก็บค่า field longti จากฐานข้อมูลมาเก็บไว้ในตัวแปร long ของ javascript
var zoom = 16; //มีการกำหนดค่าตัวแปร zoom ให้เป็น 14 , เพื่อทำการขยายภาพตอนเริ่มต้นแสดงแผนที่

var from_projection = new OpenLayers.Projection("EPSG:4326"); // Transform from WGS 1984
var to_projection = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
var position = new OpenLayers.LonLat(long, lat).transform(from_projection,
to_projection); //ทำการเก็บค่าตัวแปร lat,long ไว้ในตัวแปร position , เพื่อไว้แสดงค่าพิกัดบนแผนที่ OpenStreetMap ตอนเริ่มต้น


map = new OpenLayers.Map("Map"); //ใช้ Function OpenLayer.Map() ในการแสดงแผนที่

var map_link = new OpenLayers.Layer.OSM();
map.addLayer(map_link);

var markers = new OpenLayers.Layer.Markers(
"Markers"); //แสดงสัญลักษณ์ Marker ปักหมุดโดยใช้ Function Markers , แต่ต้องมีเรียกใช้งาน Openlayers.js ไม่งั้นจะไม่แสดงสัญลักษณ์ออกมา

map.addLayer(markers);
markers.addMarker(new OpenLayers.Marker(position));

map.setCenter(position, zoom);
</script>