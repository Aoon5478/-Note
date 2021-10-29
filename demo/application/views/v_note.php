<form enctype='multipart/form-data' action="<?php echo $base_url ?>Note/save" method="post" id="frm">
    <div class="row ">
        <div class="col-2 p-3 text-center mt-3 ">
            <i class="bi bi-book" style="font-size: 5rem; color: black;"></i>
            <div class="mb-3">
                <label class="form-label">วันที่แจ้งเตือน</label>
                <input name="date_alert" type="date" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">เวลาแจ้งเตือน</label>
                <input name="time_alert" type="time" class="form-control">
            </div>
            <div>
                <label class="form-label">พิมพ์หัวเรื่อง</label>
                <input name="title" placeholder="Title" class="form-control form-control-lg" type="text">
            </div>
            <div>
                <label class="form-label">Tag</label>
                <input name="tag" placeholder="#ร้านอาหาร" class="form-control form-control-lg" type="text">
            </div>
            <div>
                <button type="submit" class="btn" style="background-color: #FFB4B4; margin-Top: 3rem">บันทึก</button>
            </div>

        </div>
        <div class="col">
            <div id="editor"> 
                <p></p>
            </div>
            <input type="hidden" name="description" id="description">
        </div>
        <div class="col" style="margin-left: -1.5rem; margin-Top: -0.6rem">
            <div class="mb-5">
                <div class="d-flex justify-content-start border-bottom ">
                    <button type="button" style="background-color: #fafafa; border-color:#fafafa;">
                        <label class="btn btn-default ">
                            <i class='bx bx-image fs-4'></i>
                            <input name="formFileImage" type="file" hidden id="formFileImage" onchange="previewImage()">
                        </label>
                    </button>
                    <button type="button" style="background-color: #fafafa; border-color:#fafafa;"> 
                        <label class="btn btn-default">
                            <i class='bx bxs-videos fs-4 '></i>
                            <input name="formFileVideo" type="file" hidden id="formFileVideo" onchange="previewVideo()">
                        </label>
                    </button>
                    <button id="btn-clear" class="btn fs-4 "><i class="bi bi-trash"></i></button>
                </div>
            </div>
            <img id="picimg" src="" class="img-fluid" />
            <div class="embed-responsive embed-responsive-21by9">
                <iframe id="frame" class="embed-responsive-item" src=""></iframe>
            </div>
        </div>
    </div>
</form>
<script>
    //img
    function previewImage() {
        picimg.src = URL.createObjectURL(event.target.files[0]);
    }
    //Video
    function previewVideo() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    //clear 
    $('#btn-clear').click(function(e) {
        e.preventDefault();
        document.getElementById('formFileImage').value = null;
        picimg.src = "";
        document.getElementById('formFileVideo').value = null;
        frame.src = "";

    });
    ClassicEditor.defaultConfig = {
        toolbar: {
            items: [
                'heading',
                '|',
                'bold',
                'italic',
                '|',
                'bulletedList',
                'numberedList',
                '|',
                'insertTable',
                '|',
                'undo',
                'redo'
            ]
        },
        image: {
            toolbar: [
                'imageStyle:full',
                'imageStyle:side',
                 '|',
                'imageTextAlternative'
            ]
        },
        table: {
            contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
        },
        language: 'en'
    };
    var myEditor;

    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log('Editor was initialized', editor);
            myEditor = editor;
        })
        .catch(error => {
            console.error(error);
        });
    // myEditor.getData();
    $("#frm").submit(function(event) {
        // event.preventDefault();
        console.log(myEditor.getData())
        $('#description').val(myEditor.getData());
        $('#frm').submit();
    });
</script>
<style>
    .ck-editor__editable_inline {
        min-height: 800px;
    }
</style>