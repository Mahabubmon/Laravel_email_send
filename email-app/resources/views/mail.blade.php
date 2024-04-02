<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="container">
    <div class="row"><div class="col-md-12 mt-5">
        <div class="card">
            <div class="car-header">
                Send Mail in Laravel
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="">Addre</label>
                        <textarea name="address" id="address" cols="30" rows="10"></textarea>
                        
                    </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>

                </form>
            </div>
        </div>
    </div></div>
</div>
    
</body>
</html>