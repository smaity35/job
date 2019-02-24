<?php include('header.php');?>

    <section class="upload-resume">
        <div class="container">
            <h3>Upload & Parse resume</h3>
            <form>
                <div class="form-box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                          aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            40% Complete
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 file-upload">
                        <label>
                            <input required="" type="file" name="">
                            <span>chose file</span>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <button class="my-btn">upload</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Contents</p>
                        <textarea></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Candidate Name</p>
                        <input type="text" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Degree</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-md-4">
                        <p>Skills</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-md-4">
                        <p>graduation year</p>
                        <input type="text" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Phone Number</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-md-6">
                        <p>Email</p>
                        <input type="text" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Parent Details</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-md-6">
                        <p>Address</p>
                        <input type="text" name="">
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Certification</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-md-6">
                        <p>years of experience</p>
                        <input type="text" name="">
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>university</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-md-6">
                        <p>hobbies</p>
                        <input type="text" name="">
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>project</p>
                        <input type="text" name="">
                    </div>
                    <div class="col-md-4">
                        <p>languages</p>
                        <input type="text" name="">
                    </div>   
                    <div class="col-md-4">
                        <p>professional experience</p>
                        <input type="text" name="">
                    </div>                 
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Designation</p>
                        <input type="text" name="">
                    </div>                    
                    <div class="col-md-6">
                        <p>companies worked at</p>
                        <input type="text" name="">
                    </div>                 
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button>save data</button>
                    </div>                    
                    <div class="col-md-6">
                       <button>export json</button>
                    </div>                 
                </div>
                </div>
            </form>
        </div>
    </section>

<?php include('footer.php');?>


