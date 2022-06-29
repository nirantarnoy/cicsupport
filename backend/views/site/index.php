<?php

/** @var yii\web\View $this */

$this->title = 'CIC Support';
?>
<div class="page-header mt-2 pb-4 mx-lg-n2 border-0 justify-content-start flex-wrap flex-md-nowrap">
    <h1 class="text-dark-m3 pb-0 mb-3 mb-md-0 text-130">
        ภาพรวมระบบ
    </h1>

    <div class="ml-2 d-none d-xl-inline-block">
        <div class="dropdown dropdown-hover">
            <a data-display="static" href="#" class="mt-1 btn dropdown-toggle text-600 text-90 border-0 btn-outline-default py-1 px-2 btn-h-light-primary btn-a-light-primary radius-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                ( Click For Settings <i class="fa fa-cog text-110"></i> )
            </a>

            <form autocomplete="off" style="width: 18rem; max-width: 90vw;" class="dropdown-menu shadow pt-3 mr-lg-n2 dropdown-caret">
                <h3 class="pl-3 text-125 text-orange-d2 mb-1">
                    Menu Options
                </h3>

                <div class="p-1 dropdown-clickable list-group">
                    <label class="list-group-item px-3 py-2 mb-0 bgc-h-default-l3 border-0">
                        <input type="checkbox" id="id-full-width" class="mr-1 align-sub" checked />
                        Full Width
                    </label>

                    <label class="list-group-item px-3 py-2 mb-0 bgc-h-default-l3 border-0">
                        <input type="checkbox" id="id-flip-highlight" class="mr-1 align-sub" />
                        Flip Highlight Border
                    </label>

                    <label class="list-group-item px-3 py-2 mb-0 bgc-h-default-l3 border-0">
                        <input type="checkbox" id="id-sm-highlight" class="mr-1 align-sub" checked />
                        Smaller Highlight Border
                    </label>
                </div>
            </form>
        </div><!-- /.dropdown -->
    </div>

    <!-- search box -->
    <div class="ml-auto d-flex">
        <div class="d-flex align-items-center px-lg-0">
            <i class="fa fa-search text-blue mr-n3"></i>
            <input type="text" placeholder="ค้นหา..." class="form-control brc-blue-m1 brc-on-focus border-none border-b-2 radius-0 shadow-none bgc-transparent pl-35 mr-1" />
        </div>

        <div class="text-right">
            <button class="btn btn-outline-secondary btn-bold radius-1 pl-0 py-0 text-nowrap">
                    <span class="d-inline-block bgc-secondary-m3 shadow-sm h-4 px-2 pt-1 mr-15">
                    <i class="fa fa-clipboard-check text-dark-tp5 text-110 mt-3px"></i>
                </span>
                <span>
                    <span class="d-none d-sm-inline">ดูรายงาน </span>
                    </span>
            </button>
        </div>
    </div>
</div>





<div class="row" id="infobox-row">
    <div class="col-12 col-sm-6 col-lg-3 my-1 my-lg-0 px-sm-1 px-lg-0">
        <div class="d-flex align-items-center bgc-green-d3 py-3" role="button">

            <div class="pos-rel p-3 bgc-white-tp8 radius-round ml-3 mr-3 shadow-md">
<!--                <i class="pos-abs mt-n2px ml-n3px fa fa-dollar-sign text-dark-tp5 opacity-5 w-5 h-5 text-center pt-1 text-170"></i>-->
                <i class="pos-rel fa fa-trophy text-warning w-5 h-5 text-center pt-1 text-170"></i>
            </div>

            <div class="text-white">
                <div>
                    <span class="text-160 text-600">99.98</span>
                    <i class="fa fa-arrow-up ml-2"></i>
                </div>
                <div class="text-uppercase text-85 text-600 letter-spacing">
                    คะแนนสูงสุด
                </div>
            </div>

        </div>
    </div>


    <div class="col-12 col-sm-6 col-lg-3 my-1 my-lg-0 px-sm-1 px-lg-0">
        <div class="d-flex align-items-center bgc-primary-d3 py-3 border-l-3 brc-white-tp2" role="button">

            <div class="pos-rel p-3 bgc-white-tp8 radius-round ml-3 mr-3 shadow-md">
<!--                <i class="pos-abs mt-n1 ml-n1 fa fa-shopping-basket text-dark-tp5 opacity-5 w-5 h-5 text-center pt-1 text-170"></i>-->
                <i class="pos-rel fa fa-trophy text-danger w-5 h-5 text-center pt-1 text-170"></i>
            </div>

            <div class="text-white">
                <div>
                    <span class="text-160 text-600">68.50</span>
                    <i class="fa fa-arrow-down ml-2"></i>
                </div>
                <div class="text-uppercase text-85 text-600 letter-spacing">
                    คะแนนต่ำสุด
                </div>
            </div>

        </div>
    </div>


    <div class="col-12 col-sm-6 col-lg-3 my-1 my-lg-0 px-sm-1 px-lg-0">
        <div class="d-flex align-items-center bgc-purple-d2 py-3 border-l-3 brc-white-tp2" role="button">

            <div class="pos-rel p-3 bgc-white-tp8 radius-round ml-3 mr-3 shadow-md">
                <i class="pos-abs mt-n1 fa fa-clipboard text-dark-tp5 opacity-4 w-5 h-5 text-center pt-1 fa-2x"></i>
                <i class="pos-rel fa fa-check text-white w-5 h-5 text-center pt-1 text-170"></i>
            </div>

            <div class="text-white">
                <div>
                    <span class="text-160 text-600">20</span>
                    <i class="fa fa-plus text-white ml-1"></i>
                </div>
                <div class="text-uppercase text-85 text-600 letter-spacing">
                    CAR คงค้าง
                </div>
            </div>

        </div>
    </div>


    <div class="col-12 col-sm-6 col-lg-3 my-1 my-lg-0 px-sm-1 px-lg-0">
        <div class="d-flex align-items-center bgc-default-d3 py-3 border-l-3 brc-white-tp2" role="button">

            <div class="pos-rel p-3 bgc-white-tp8 radius-round ml-3 mr-3 shadow-md">
                <i class="pos-abs mt-n2px ml-n3px fa fa-retweet text-dark-tp5 opacity-5 w-5 h-5 text-center pt-1 text-170"></i>
                <i class="pos-rel fa fa-retweet text-white w-5 h-5 text-center pt-1 text-170"></i>
            </div>

            <div class="text-white">
                <div>
                    <span class="text-160 text-600">65%</span>
                    <i class="fa fa-arrow-right text-white ml-2"></i>
                </div>
                <div class="text-uppercase text-85 text-600 letter-spacing">
                    ประสิทธิภาพการตรวจ
                </div>
            </div>

        </div>
    </div>
</div>



<div id="id-toast-success2">ddd</div>

<div class="row mt-45">
    <div class="col-lg-7 col-12 pl-lg-0 pr-lg-2">
        <!-- we could use '.card' here as well -->
        <div class="bcard radius-2 h-100 d-flex flex-column py-35 px-2 px-lg-4">
            <div class="d-flex mb-4">
                <h4 class="text-secondary-d1 text-120 ml-1">
                    สรุปคะแนน
                </h4>

                <div class="ml-auto d-flex align-items-center">
                    <div class="dropdown dd-backdrop dd-backdrop-none-md">
                        <a class="btn btn-light-blue btn-bgc-white btn-bold radius-2 px-3 btn-xs dropdown-toggle" href="#" role="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                            เดือนนี้
                        </a>

                        <div class="dropdown-menu shadow-sm dropdown-menu-right dropdown-caret dropdown-animated dd-slide-up dd-slide-none-md radius-1 brc-secondary-l1">
                            <div class="dropdown-inner">
                                <a class="dropdown-item active btn btn-a-lighter-primary btn-a-bold mx-1" href="#">This Week</a>
                                <a class="dropdown-item btn btn-a-lighter-primary text-secondary mx-1" href="#">Last Week</a>
                                <a class="dropdown-item btn btn-a-lighter-primary text-secondary mx-1" href="#">This Month</a>
                                <a class="dropdown-item btn btn-a-lighter-primary text-secondary mx-1" href="#">Last Month</a>
                            </div>
                        </div>
                    </div>

                    <div class="ml-1">
                        <a class="btn btn-outline-secondary btn-brc-tp btn-bold radius-round btn-xs dropdown-toggle" href="#">
                            <i class="fa fa-ellipsis-h"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="row mb-3 mx-1 px-1">
                <div class="col-12 col-sm-4 px-0 d-flex justify-content-between d-sm-block">
                      <span class="text-grey-m1 ml-1">
                        revenue
                    </span>

                    <span class="text-success ml-2 mt-2 text-600 text-95 order-last">+4% <i class="fas fa-caret-up"></i></span>

                    <div class="d-sm-block flex-grow-1 text-right text-sm-left">
                        <span class="text-130 opacity-2">$</span>
                        <span class="text-secondary-d3 text-160">
                            46,220
                        </span>
                    </div>
                </div>

                <div class="col-12 col-sm-4 px-0 d-flex justify-content-between d-sm-block">
                      <span class="text-grey-m1 ml-1">
                        expense
                    </span>

                    <span class="text-orange ml-2 mt-2 text-600 text-95 order-last">+1% <i class="fas fa-caret-down"></i></span>

                    <div class="d-sm-block flex-grow-1 text-right text-sm-left">
                        <span class="text-130 opacity-2">$</span>
                        <span class="text-secondary-d3 text-160">
                            3,500
                        </span>
                    </div>
                </div>

                <div class="col-12 col-sm-4 px-0 d-flex justify-content-between d-sm-block">
                      <span class="text-grey-m1 ml-1">
                        customers
                    </span>

                    <span class="text-success ml-2 mt-2 text-600 text-95 order-last">+5% <i class="fas fa-caret-up"></i></span>

                    <div class="d-sm-block flex-grow-1 text-right text-sm-left">
                        <span class="text-secondary-d3 text-160">
                            315
                        </span>
                    </div>
                </div>
            </div><!-- /.row -->

            <div>
                <canvas id="quickstats-chart" height="120" class="mt-lg-4"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-5 col-12 pr-lg-0 mt-3 mt-lg-0">
        <div class="bgc-white shadow-sm radius-2 pt-35 px-0 px-lg-4">
            <div class="d-flex mb-2">
                <h4 class="text-secondary-d1 text-120 px-3 px-lg-0">
                    ประสิทธิภาพการตรวจ
                </h4>

                <div class="ml-auto d-flex align-items-center">
                    <a class="btn btn-light-secondary btn-bgc-white btn-bold radius-2 px-3 btn-xs text-nowrap" href="#">
                        ดูทั้งหมด
                    </a>

                    <div class="ml-1 mr-2">
                        <a class="btn btn-outline-secondary btn-brc-tp btn-bold radius-round btn-xs dropdown-toggle" href="#">
                            <i class="fa fa-ellipsis-h"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card border-0">
                <div class="card-body px-0 px-sm-1 px-lg-0 border-t-1 brc-default-l3 table-responsive-sm">
                    <table class="table brc-grey-l4 mb-2">
                        <thead class="bgc-transparent">
                        <tr>
                            <th class="border-0 text-secondary-m2">
                                ชื่อทีม
                            </th>
                            <th class="border-0 text-secondary-m2">
                                สถานะ
                            </th>
                            <th class="border-0 text-secondary-m2">
                                ความคืบหน้า
                            </th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr class="bgc-h-default-l4" role="button">
                            <td class="text-dark-tp3 text-95">
                                ทีมตรวจที่ 1
                            </td>
                            <td>
                                <span class="badge text-80 border-l-3 brc-black-tp8 bgc-green text-white">complete</span>



                            </td>
                            <td class="text-dark-m1 w-6">
                                <div class="align-self-center pos-rel text-green">
                                    <canvas class="task-progress" height="50" width="80" data-percent="100"></canvas>
                                    <span class="position-center text-80">
        									100%
        								</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="bgc-h-default-l4" role="button">
                            <td class="text-dark-tp3 text-95">
                                ทีมตรวจที่ 2
                            </td>
                            <td>

                                <span class="badge text-80 border-l-3 brc-black-tp8 bgc-blue text-white">in progress</span>


                            </td>
                            <td class="text-dark-m1 w-6">
                                <div class="align-self-center pos-rel text-blue">
                                    <canvas class="task-progress" height="50" width="80" data-percent="70"></canvas>
                                    <span class="position-center text-80">
        									70%
        								</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="bgc-h-default-l4" role="button">
                            <td class="text-dark-tp3 text-95">
                                ทีมตรวจที่ 3
                            </td>
                            <td>


                                <span class="badge text-80 border-l-3 brc-black-tp8 bgc-orange text-white">pending</span>

                            </td>
                            <td class="text-dark-m1 w-6">
                                <div class="align-self-center pos-rel text-orange-d2">
                                    <canvas class="task-progress" height="50" width="80" data-percent="40"></canvas>
                                    <span class="position-center text-80">
        									40%
        								</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="bgc-h-default-l4" role="button">
                            <td class="text-dark-tp3 text-95">
                                ทีมตรวจที่ 4
                            </td>
                            <td>



                                <span class="badge text-80 border-l-3 brc-black-tp8 bgc-red text-white">cancelled</span>
                            </td>
                            <td class="text-dark-m1 w-6">
                                <div class="align-self-center pos-rel text-danger">
                                    <canvas class="task-progress" height="50" width="80" data-percent="20"></canvas>
                                    <span class="position-center text-80">
        									20%
        								</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="bgc-h-default-l4" role="button">
                            <td class="text-dark-tp3 text-95">
                                ทีมตรวจที่ 5
                            </td>
                            <td>
                                <span class="badge text-80 border-l-3 brc-black-tp8 bgc-green text-white">complete</span>



                            </td>
                            <td class="text-dark-m1 w-6">
                                <div class="align-self-center pos-rel text-green">
                                    <canvas class="task-progress" height="50" width="80" data-percent="95"></canvas>
                                    <span class="position-center text-80">
        									95%
        								</span>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="row mt-4 mt-lg-5">
    <div class="col-12 px-lg-0">
        <h4 class="text-dark-m3 pb-0 mb-3 text-140 pl-2">
            ปฏิทินกิจกรรมและตารางตรวจ
        </h4>

        <div class="bgc-white shadow-sm p-3 p-lg-4 radius-2">
            <div id='calendar' class="text-dark-l1"></div>
        </div>
    </div>
</div>