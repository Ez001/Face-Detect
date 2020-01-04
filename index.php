<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Face Detection</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/bootstrap.min.css" >    
    <link rel="stylesheet" href="style/face-detection.css">
    <script src="js/jquery.min.js"></script>
    <script src='js/face-api.min.js'></script>
</head>
<body>
        <main>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-12 col-md-4 col-xl-3 align-top">
                        <div class="row mb-3">
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch">
                                        <input type="checkbox" id="webcam-switch">
                                        <i></i> Webcam </label>  
                                        <button id="cameraFlip" class="btn d-none"></button>     
                                </div>
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch disabled">
                                        <input type="checkbox" disabled id="model-switch">
                                        <i></i> Load Model </label>      
                                </div> 
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch disabled">
                                        <input type="checkbox" disabled id="detection-switch">
                                        <i></i> Detect Face </label>      
                                </div>   
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch disabled">
                                        <input type="checkbox" disabled id="box-switch">
                                        <i></i> Bounding Box </label>      
                                </div>
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch disabled">
                                        <input type="checkbox" disabled id="landmarks-switch">
                                        <i></i> Landmarks </label>      
                                </div>
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch disabled">
                                        <input type="checkbox" disabled id="expression-switch">
                                        <i></i> Expression </label>      
                                </div>    
                                <div class="col-md-10 col-6 form-control">
                                        <label class="form-switch disabled">
                                        <input type="checkbox" disabled id="age-gender-switch">
                                        <i></i> Age & Gender </label>      
                                </div>      
                                <div class="col-md-10 col-6 mt-2">
                                     More on  <a href="https://bensonruan.com" target="_blank">bensonruan.com</a>    
                                </div>               
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-xl-9 align-top" id="webcam-container">
                        <div class="progress-bar-container">
                            <div class="progress progress-bar progress-bar-striped progress-bar-animated d-none">Loading Model</div>
                            <div class="spinner-border d-none" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        
                        <video id="webcam" autoplay muted playsinline></video>
                    </div>
                </div>
            </div>
        </main>   
        <script src="js/face-detection.js"></script>
</body>
</html>