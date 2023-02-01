<?php
$link1 = strtolower($this->uri->segment(1));
$link2 = strtolower($this->uri->segment(2));
$link3 = strtolower($this->uri->segment(3));
$link4 = strtolower($this->uri->segment(4));



//$today = date('Y-m-d');
?>
<!--<main class="main-content bgc-grey-200">-->
<main class="main-content">

    <div id="mainContent" class="" >
        
        <form action="surveikepuasan/<?php echo $link1; ?>/v/f.html" class="col-lg-12 justify-content-center" method="post" >
            <div class="row justify-content-center p-15">
                <center>
                    <span style="font-weight: bold">Kalender Laporan</span>
                    
<!--                    --><?php //echo $link1;?><!-- <br>-->

                </center>
<!--                <h5 class="m-0 font-weight-bold">Kalender Laporan</h5>-->
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <label class="ml-5 fw-500" for="tanggal">Tanggal Awal</label>
                    <?php if($filter_date_dari==null){ ?>
                        <div class="timepicker-input input-icon form-group">
                            <div class="input-group">
                                <div
                                        class="icon-agenda bgc-white bd bdwR-0"
                                >
                                    <i class="ti-calendar"></i>
                                </div>
                                <input
                                        type="text"
                                        class="form-control border-grey start-date"
                                        data-provide="datepicker"

                                        value="<?php echo $tgl_now?>"
                                        data-date-format="d-M-yyyy"
                                        name="dari_tgl"
                                        id="dari_tgl"
                                        required
                                />
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="timepicker-input input-icon form-group">
                            <div class="input-group">
                                <div class="icon-agenda bgc-white bd bdwR-0">
                                    <i class="ti-calendar"></i>
                                </div>
                                <input
                                        type="text"
                                        class="form-control border-grey start-date"
                                        data-provide="datepicker"

                                        value="<?php echo $filter_date_dari;?>"
                                        data-date-format="d-M-yyyy"
                                        name="dari_tgl"
                                        id="dari_tgl"
                                        required
                                />
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div class="col-md-2">
                    <label class="fw-500 ml-5" for="tanggal">Tanggal Akhir</label>
                    <?php if($filter_date_sampai==null){ ?>
                        <div class="timepicker-input input-icon form-group">
                            <div class="input-group">
                                <div
                                        class="icon-agenda bgc-white bd bdwR-0"
                                >
                                    <i class="ti-calendar"></i>
                                </div>
                                <input
                                        type="text"
                                        class="form-control border-grey start-date"
                                        data-provide="datepicker"

                                        value="<?php echo $tgl_now?>"
                                        data-date-format="d-M-yyyy"
                                        name="sampai_tgl"
                                        id="sampai_tgl"
                                        required
                                />
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="timepicker-input input-icon form-group">
                            <div class="input-group">
                                <div
                                        class="icon-agenda bgc-white bd bdwR-0"
                                >
                                    <i class="ti-calendar"></i>
                                </div>
                                <input
                                        type="text"
                                        class="form-control border-grey start-date"
                                        data-provide="datepicker"

                                        value="<?php echo $filter_date_sampai; ?>"
                                        data-date-format="d-M-yyyy"
                                        name="sampai_tgl"
                                        id="sampai_tgl"
                                        required
                                />
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>


            <div class="row justify-content-center">
                <div class="mb-3 mr-3 ml-4">
                    <button type="submit" class="btn btn-primary">
                        <span class="bg-float"></span>
                        <span class="text">Filter</span>
                    </button>
                </div>
            </div>
        </form>



        <!--taruh cuys disini-->


        <!--table beginning-->
        <div class="row justify-content-center p-15">
            <center>
<!--                <span style="font-weight: bold">27 Januari 2023 s.d 31 Januari 2023</span>-->
                <span style="font-weight: bold">
                    <?php echo $tgl_awal_full??$this->Mcrud->tgl_idn(date('Y-m-d'),"full");?> s.d.
                    <?php echo $tgl_akhir_full??$this->Mcrud->tgl_idn(date('Y-m-d'),"full");?>
                </span>
            </center>
            <!--                <h5 class="m-0 font-weight-bold">Kalender Laporan</h5>-->
        </div>
        <div class="row" style="margin-left: 50px">
            <div class="col-md-12">
                <center>
                    <table style="width:40%">
                        <tr>
                            <th>Jumlah Responden : </th>
                            <td style="color: black; font-weight: bold">
                                <?php echo $jumlah_responden??''?>
                            </td>
                        </tr>
                        <tr>
                            <th>Nilai / Rating : </th>
                            <td style="color: black; font-weight: bold">
                                <?php echo $rating??'';?>
                            </td>
                        </tr>

                    </table>
                </center>

            </div>
        </div>
        <!--table ending-->
    </div>
</main>