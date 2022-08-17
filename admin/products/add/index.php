<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="../../../images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <title>add products</title>
    <script src="../../js/ckeditor.js"></script>
  </head>
  <body>
    <header>
      <?php
        $img = "../../../";
        include "../../incs/navbar.inc.php"; ?>
    </header>
    <main>
      <div class="container-fulid">
        <div class="row">
          <?php include "../../incs/nav.inc.php"; ?>
          <div class="col-9 overflow-auto" style="max-height:572px">
            <div class="container">
              <div class="row">
                <!--work place-->
                <div class="col-12">
                  <h3>Product INFO</h3>
                </div>
                <div class="col-12 bg-secondary text-light">
                  <div class="mt-3">
                    <label for="title"><span class="text-danger">*</span>Title</label>
                    <input type="text" id="title">
                  </div>
                  <div class="mt-3">
                    <label for="photos"><span class="text-danger">*</span>Photos</label>
                    <div class="container">
                      <div class="row">
                        <div class="container col-6">
                          <div class="row">
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-1-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="main empty-img w-100 m-0" src="" alt="Not Work" id="photo-1" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-2-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0" src="" alt="Not Work" id="photo-2" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-3-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0" src="" alt="Not Work" id="photo-3" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-4-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0" src="" alt="Not Work" id="photo-4" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-5-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0" src="" alt="Not Work" id="photo-5" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-6-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0" src="" alt="Not Work" id="photo-6" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-7-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0" src="" alt="Not Work" id="photo-7" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-8-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0" src="" alt="Not Work" id="photo-8" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-9-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0" src="" alt="Not Work" id="photo-9" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-10-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0 h-100" src="" alt="Not Work" id="photo-10" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-11-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0 h-100" src="" alt="Not Work" id="photo-11" onclick="select(this);">
                            </div>
                            <div class="col-4 bg-light text-center border p-0" style="height:120px;">
                              <label class="photo-label text-secondary mt-4" for="photos" id="photo-12-label">+<br><small>Add photo</small></label>
                              <img width="100%" height="100%" class="empty-img w-100 m-0 h-100" src="" alt="Not Work" id="photo-12" onclick="select(this);">
                            </div>
                          </div>
                        </div>
                        <div class="container col-4">
                          <div class="row">
                            <div class="col-12 border bg-light mt-5 p-1" style="height:400px;">
                              <small class="subtitle text-secondary" style="left: 32px; top:199px !important; position:relative;" id="selector-label">No image selected</small>
                              <img class="d-none w-100 m-0" src="" alt="Not Work" id-target="0" id="modal">
                              <button class="btn btn-danger w-100 d-none mb-1 mt-3 " type="button" id="remove-btn" onclick="r= new removePhoto(this);r;">Remove</button>
                              <button class="btn btn-light w-100 d-none mb-1" type="button" id="main-btn" onclick="selectMain();">Select as main</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input class="d-none" type="file" name="photos" id="photos" onchange="upImages(this);" multiple>
                  </div>
                  <div class="mt-3">
                    <label for="editor"><span class="text-danger">*</span>Decoration</label>
                    <textarea id="editor" style="display:none" rows="8" cols="80"></textarea>
                    <h5 id="v"></h5>
                  </div>
                </div>
                <div class="col-12">
                  <h3>Properties</h3>
                </div>
                <div class="col-12 bg-dark text-light pt-4">
                  <div>
                    <!--add properties form-->
                    <label for="pro-name">name</label>
                    <input class="form-control w-50 d-inline" type="text" id="pro-name" value="">
                    <button class="btn btn-light d-inline" id="pro-btn" onclick="addPro();">add</button>
                  </div>
                  <div class="border container mt-3">
                    <!--properties container-->
                    <div class="row p-3" id="pro-container">
                      <div class="col-3">
                        <input type="checkbox" name="pro-checkbox" id="color" value="Color">
                        <label for="color"> Color</label>
                      </div>
                      <div class="col-3">
                        <input type="checkbox" name="pro-checkbox" id="size" value="Size">
                        <label for="size"> Size</label>
                      </div>
                      <div class="col-3">
                        <input type="checkbox" name="pro-checkbox" id="type" value="Type">
                        <label for="type"> Type</label>
                      </div>
                    </div>
                  </div>
                  <div>
                    <button class="btn btn-success mt-2 mb-5 w-100" onclick="creatPro(this);">Create properties</button>
                  </div>
                  <div class="border container mt-3 mb-3 pt-2 pb-2">
                    <div class="row" id="pro-con">
                      <!--properties values container-->
                    </div>
                  </div>
                  <button class="btn btn-primary w-100 mb-2" onclick="addProperties()">Add Properties</button>
                  <div class="col-12 overflow-auto" style="max-height:300px">
                    <!--properties setup-->
                    <table class="table table-striped w-100 table-light overflow-auto" style="max-height:300px">
                      <thead>
                        <tr class="">
                          <th scope="col"><input type="checkbox" id="select-all"></th>
                          <th scope="col">Property</th>
                          <th scope="col">Value</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Cost</th>
                          <th scope="col">Price</th>
                        </tr>
                      </thead>
                      <tbody class="overflow-auto" style="height:200px">
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-12 overflow-auto" style="max-height:400px">
                    <button class="btn btn-primary w-25 mx-5 me-4 mt-5">Edit</button>
                    <button class="btn btn-danger w-25 mx-2 mt-5">Delete</button>
                    <button class="btn btn-success w-25 mx-2 mt-5" onclick="f();">Add</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
  <script>
  "use strict"
  var main = document.getElementsByClassName("main")[0].id;
  var modal = document.getElementById("modal");
  var modalLabel =document.getElementById('selector-label');
  var mainBtn = document.getElementById("main-btn");
  var imgs = document.getElementsByClassName('img');
  var rmBtn = document.getElementById("remove-btn");
  var options = [];
  class removePhoto {
    constructor(rmBtn) {
    this.rmBtn = rmBtn;
    if (this.holdBtn(rmBtn, "true")) {
      var removeList = this.remove();
      if (!removeList[0]) {
        var done = this.moveOver(removeList[1]);
      } else {
        var done = this.clearPhotoBody(removeList[1]);
        this.clearModalBody(removeList[1])
      }if (done) {
        this.holdBtn(rmBtn, "");
        selectMain();
      }
    }
    return;
    }
    clearModalBody(imgNum) {
      if (imgNum == 1) {
        rmBtn.classList.add("d-none");
        mainBtn.classList.add("d-none");
        modal.classList.add("d-none");
        modalLabel.classList.remove("d-none");
      }
      return;
    }
    holdBtn(rmBtn, manner) {
      rmBtn.disabled=manner;
      return true;
    }
    remove() {
      var imgId = modal.getAttribute("id-target");
      var imgNum = parseInt(imgId.replace("photo-",""));
      if (imgNum < imgs.length) {
        let nextImg = document.getElementById("photo-"+(imgNum+1));
        modal.src = nextImg.src;
        modal.setAttribute("id-target", nextImg.id);
        return [false, imgNum];
      }else {
        if (imgNum > 1) {
          let nextImg = document.getElementById("photo-"+(imgNum-1));
          modal.src = nextImg.src;
          modal.setAttribute("id-target", nextImg.id);
        }
        return [true, imgNum];
      }
    }
    clearPhotoBody(imgNum) {
      let img = document.getElementById("photo-"+imgNum);
      let label = document.getElementById("photo-"+imgNum+"-label");
      img.src ="";
      label.style.display="block";
      img.classList.add('empty-img');
      img.classList.remove('img');
      return true;
    }
    setPhotoBody(number) {
      let emptyImg = document.getElementById(("photo-"+number));
      let img = document.getElementById(("photo-"+(number+1)));
      emptyImg.src = img.src;
      return;
    }
    moveOver(number) {
      for (number; number < imgs.length+1; number++) {
        if (number < imgs.length) {
          this.setPhotoBody(number);
        }else {
          this.clearPhotoBody(number);
        }
      }
      return true;
    }
  }
  ClassicEditor.create( document.querySelector( '#editor' ) ).catch( error => {
    console.error( error );
  } );
  function upImages(input) {
    const imgsBodys = document.getElementsByClassName('empty-img');
    const imgsBodysLength = imgsBodys.length;
    for (var fileIndex = 0; fileIndex < input.files.length; fileIndex++) {
      let imgIndex = 0;
      if (fileIndex < imgsBodysLength) {
        const imgBody =imgsBodys[imgIndex];
        const imgLabel = document.getElementById((imgBody.id+"-label"));
        const img=input.files[fileIndex];
        addImage(img, imgBody, imgLabel);
      }
      imgIndex++;
    }
  }
  function selectMain() {
    let target = document.getElementById(modal.getAttribute("id-target"));
    let last = document.getElementById(main);
    last.classList.remove("main");
    target.classList.add("main");
    main = document.getElementsByClassName("main")[0].id;
  }
  function addPro() {
    let name = document.getElementById("pro-name").value;
    let container = document.getElementById("pro-container");
    container.innerHTML+='<div class="col-3"><input type="checkbox" name="pro-checkbox" id="'+name+'" value="'+name+'"> <label for="'+name+'"> '+name+' </label></div>';
  }
  function addImage(img, imgBody, imgLabel) {
    if (img) {
      const reader = new FileReader();
      reader.addEventListener('load', function() {
        imgBody.setAttribute("src", this.result);
      });
      reader.readAsDataURL(img);
      imgLabel.style.display="none";
      imgBody.classList.remove('empty-img');
      imgBody.classList.add('img');
    }
  }
  function select(img) {
    rmBtn.classList.remove("d-none");
    mainBtn.classList.remove("d-none");
    modal.classList.remove("d-none");
    modalLabel.classList.add("d-none");
    modal.src=img.src;
    modal.setAttribute("id-target", img.id);
  }
  function f() {
    v = document.querySelector('.ck-blurred').innerHTML;
    document.getElementById('v').innerHTML= v;
  }
  function creatPro(btn) {
    let checkboxs = document.getElementsByName('pro-checkbox');
    for (var checkbox of checkboxs) {
      if (checkbox.checked) {
        if (!options.includes(checkbox.value)) {
          options.push(checkbox.value);
        }
      }
    }
    newRow();
  }
  function newRow() {
    let id = 0;
    let container = document.getElementById('pro-con');
    let contact = "";
    container.innerHTML="";
    for (var i = 0; i < options.length; i++) {
      if (options[i]=="Color") {
        contact+='<div class="col-5 mt-4 mx-4 border bg-light text-dark" id="color-pro">';
        contact+='  <div class="container-fulid border">';
        contact+='    <div class="row">';
        contact+='      <div class="col-10">';
        contact+='        <h4>color</h4>';
        contact+='      </div>';
        contact+='      <div class="col-2 mt-1">';
        contact+='        <button class="btn-close" type="button" onclick="document.getElementById(\'color-pro\').remove()"></button>';
        contact+='      </div>';
        contact+='    </div>';
        contact+='  </div>';
        contact+='  <div class="container-fulid overflow-auto" style="height:340px">';
        contact+='    <div class="row" id="color-container">';
        contact+='      <!--colors bar-->';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn btn-danger w-100">Red<br><input class="form-check-input" type="checkbox" name="color" value="Red"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn btn-dark w-100">Black<br><input class="form-check-input" type="checkbox" name="color" value="Black"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn btn-success w-100">Green<br><input class="form-check-input" type="checkbox" name="color" value="Green"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn btn-light w-100">White<br><input class="form-check-input" type="checkbox" name="color" value="White"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn btn-warning w-100">Yellow<br><input class="form-check-input" type="checkbox" name="color" value="Yellow"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn btn-primary w-100">Blue<br><input class="form-check-input" type="checkbox" name="color" value="Blue"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn text-light w-100" style="background-color:#800080;">Pruple<br><input class="form-check-input" type="checkbox" name="color" value="Pruple"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn text-light w-100" style="background-color:#C0C0C0;">Silver<br><input class="form-check-input" type="checkbox" name="color" value="Silver"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn text-light w-100" style="background-color:#FF00FF;">Pink<br><input class="form-check-input" type="checkbox" name="color" value="Pink"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn text-light w-100" style="background-color:#FF4500;">Orange<br><input class="form-check-input" type="checkbox" name="color" value="Orange"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn text-light w-100" style="background-color:#8B4513;">Brown<br><input class="form-check-input" type="checkbox" name="color" value="Brown"></button>';
        contact+='      </div>';
        contact+='      <div class="col-4 mb-2">';
        contact+='        <button class="btn text-light w-100" style="background-color:#708090;">Gray<br><input class="form-check-input" type="checkbox" name="color" value="Gray"></button>';
        contact+='      </div>';
        contact+='    </div>';
        contact+='    <div class="row">';
        contact+='      <div class="col-12 mt-4">';
        contact+='        <label for="color-n">Color</label>';
        contact+='        <input type="text" class="w-25" id="color-n">';
        contact+='        <input type="color" id="color-c">';
        contact+='        <input class="btn btn-outline-info" type="button" value="Add" onclick="addValue(\'color\');">';
        contact+='      </div>';
        contact+='    </div>';
        contact+='  </div>';
        contact+='</div>';
      }else {
        contact+='<div class="col-5 mt-4 mx-4 border bg-light text-dark" id="'+options[i]+'-pro">';
        contact+='  <div class="container-fulid border">';
        contact+='    <div class="row">';
        contact+='      <div class="col-10">';
        contact+='        <h4>'+options[i]+'</h4>';
        contact+='      </div>';
        contact+='      <div class="col-2 mt-1">';
        contact+='        <button class="btn-close" type="button" onclick="document.getElementById(\''+options[i]+'-pro\').remove()"></button>';
        contact+='      </div>';
        contact+='    </div>';
        contact+='  </div>';
        contact+='  <div class="container-fulid overflow-auto" style="height:340px">';
        contact+='    <div class="row" id="'+options[i]+'-container">';
        contact+='    </div>';
        contact+='    <div class="row">';
        contact+='      <div class="col-12 mt-4">';
        contact+='        <label for="'+options[i]+'-n">'+options[i]+'</label>';
        contact+='        <input type="text" class="w-25" id="'+options[i]+'-n">';
        contact+='        <input type="color" id="'+options[i]+'-c">';
        contact+='        <input class="btn btn-outline-info" type="button" value="Add" onclick="addValue(\''+options[i]+'\');">';
        contact+='      </div>';
        contact+='    </div>';
        contact+='  </div>';
        contact+='</div>';
      }
    }
    container.innerHTML+=contact;
    id++;
  }
  function addValue(id) {
    let color = document.getElementById((id+"-c")).value;
    let name = document.getElementById((id+"-n")).value;
    let container = document.getElementById((id+"-container"));
    let newValue ='<div class="col-4 mb-2">';
    newValue +='  <button class="btn text-light w-100" style="background-color:'+color+';">'+name+'<br><input class="form-check-input" type="checkbox" name="color" value="'+name+'"></button>';
    newValue +='</div>';
    container.innerHTML += newValue;
  }
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>
