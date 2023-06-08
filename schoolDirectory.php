<!DOCTYPE html>
<html lang="en">
<?php
include 'layout/head.php'
?>

<body>
    <?php
    include 'layout/header.php'
    ?>
    <main>
        <div class="container">
            <div id="school-list" class="row mt-5 mb-5">
                <div class="col-md-4">

                    <form id="check-list" class="form-control">

                        <table class="table table-border">
                            <tr>
                                <td>Level</td>
                                <td>
                                    <select class="form-control">
                                        <option>Kindergarten</option>
                                        <option>Elemengarten</option>
                                        <option>Junior High School</option>
                                        <option>High School</option>
                                        <option>Specialized School</option>
                                        <option>University and College</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Capacity of Students</td>
                                <td>
                                    <select class="form-control">
                                        <option>0 - 200</option>
                                        <option>200 - 500 </option>
                                        <option>500 - 800</option>
                                        <option>> 800</option>
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    <select class="form-control">
                                        <option>Thanh Xuân</option>
                                        <option>Ba Đình</option>
                                        <option>Cầu Giấy</option>
                                        <option>Ba Đình</option>
                                        <option>Cầu Giấy</option>
                                        <option>Ba Đình</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Library</td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td>Canteen</td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td>Boarding</td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td><label>Sports</label></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    Swimming
                                    <input class="sports" type="checkbox" name="swimming" value="swimming">
                                </td>
                                <td>
                                    Football
                                    <input class="sports" type="checkbox" name="football" value="swimming">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Basketball
                                    <input class="sports" type="checkbox" name="swimming" value="swimming">
                                </td>
                                <td>
                                    Badminton
                                    <input class="sports" type="checkbox" name="swimming" value="swimming">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn check-button"> Submit</button>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                </div>

                <div id="school-list-child" class="col-md-8 mt-2">
                    <div class="row">
                        <h2>Kindergarten Schools</h2>
                        <div class="row mt-5">
                            <div class="col-md-5 avatar">
                                <img class="img-full-width-fix-height" src="assets/img/school/school1.png">
                            </div>
                            <div class="col-md-7 school_name">
                                <h6>Hanoi International School
                                </h6>
                                <div class="content">
                                    fgefnbgedjhbfdbffhfg
                                </div>
                                <div class="">
                                    <button class="btn download-button">Download</button>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-5 avatar">
                                <img class="img-full-width-fix-height" src="assets/img/school/school1.png">
                            </div>
                            <div class="col-md-7 school_name">
                                <h6>Hanoi International School
                                </h6>
                                <div class="content">
                                    fgefnbgedjhbfdbffhfg
                                </div>
                                <div class="download-button">
                                    <button class="btn btn-success">Download</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-5 avatar">
                                <img class="img-full-width-fix-height" src="assets/img/school/school1.png">
                            </div>
                            <div class="col-md-7 school_name">
                                <h6>Hanoi International School
                                </h6>
                                <div class="content">
                                    fgefnbgedjhbfdbffhfg
                                </div>
                                <div class="download-button">
                                    <button class="btn btn-success">Download</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-5 avatar">
                                <img class="img-full-width-fix-height" src="assets/img/school/school1.png">
                            </div>
                            <div class="col-md-7 school_name">
                                <h6>Hanoi International School
                                </h6>
                                <div class="content">
                                    fgefnbgedjhbfdbffhfg
                                </div>
                                <div class="download-button">
                                    <button class="btn btn-success">Download</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-5 avatar">
                                <img class="img-full-width-fix-height" src="assets/img/school/school1.png">
                            </div>
                            <div class="col-md-7 school_name">
                                <h6>Hanoi International School
                                </h6>
                                <div class="content">
                                    fgefnbgedjhbfdbffhfg
                                </div>
                                <div class="download-button">
                                    <button class="btn btn-success">Download</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-5 avatar">
                                <img class="img-full-width-fix-height" src="assets/img/school/school1.png">
                            </div>
                            <div class="col-md-7 school_name">
                                <h6>Hanoi International School
                                </h6>
                                <div class="content">
                                    fgefnbgedjhbfdbffhfg
                                </div>
                                <div class="download-button">
                                    <button class="btn btn-success">Download</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pagination">
                <a href="?page=1">1</a>
                <a href="?page=2">2</a>
                <a href="?page=3">3</a>
                <a href="?page=4">4</a>
                <a href="?page=5">5</a>
            </div>
        </div>
    </main>
    <?php
    include 'layout/footer.php'
    ?>
</body>

</html>