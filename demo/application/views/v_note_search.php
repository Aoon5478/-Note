<div class="row">
    <div class="col">
    </div>
    <!-- <div class="col text-center">
        <i class="bx bx-notepad" style="font-size: 10rem; "></i>
    </div> -->
    <div class="col"></div>
</div>
<div class="row ">
    <div class="col"></div>
    <div class="col">
        <div class="mb-3">
            <label class="form-label" style="margin-Top: 2rem; font-size: 2rem;">เลือกวันที่</label>
            <div id="datepicker"></div>
        </div>
        <button type="submit" class="btn btn-success search_note">ค้นหา</button>
    <div class="col"></div>

    <form action="<?php echo $base_url ?>index.php/Note/show_search_table" method="post" id="date_alert">
        <input type="hidden" name="date_alert" id="date_alert_val">
    </form>
</div>
<script>
    // แปลงวันที่
    function convertDate(dateString) {
        var p = dateString.split(/\D/g)
        return [p[1], p[2], p[0]].join("/")
    }

    var new_dates = <?php echo json_encode($dates) ?>;

    new_dates = new_dates.map(t => {
        return convertDate(t)
    })


    var dates = new_dates;
    console.log(<?php echo json_encode($dates) ?>);
    //tips are optional but good to have
    var tips = ['some description', 'some other description'];

    $('#datepicker').datepicker({
        dateFormat: 'dd/mm/yy',
        beforeShowDay: highlightDays,
        showOtherMonths: true,
        numberOfMonths: 1,
    });

    function highlightDays(date) {
        for (var i = 0; i < dates.length; i++) {
            if (new Date(dates[i]).toString() == date.toString()) {
                return [true, 'highlight', tips[i]];
            }
        }
        return [true, ''];
    }

    $('.search_note').click(function(e) {
        e.preventDefault();
        console.log($('#datepicker').val());

        $('#date_alert_val').val($('#datepicker').val())
        console.log($('#date_alert_val').val())

        $('#date_alert').submit()

    });
</script>
<style>
    td.highlight {
        border: none !important;
        padding: 1px 0 1px 1px !important;
        background: none !important;
        overflow: hidden;
    }

    td.highlight a {
        background: #ad3f29 url('https://shop.line-scdn.net/themeshop/v1/products/83/dd/c5/83ddc5de-ebbc-4a93-bf17-5c09395cfb8f/52/WEBSTORE/icon_198x278.png') 50% 40% repeat-x !important;
        border: 1px #88a276 solid !important;
    }

    .ui-datepicker {
        width: 1100px;
        padding: .2em .2em 0;
        display: none;

    }

    .ui-datepicker table {
        width: 1100px;
        font-size: 2rem;
        border-collapse: collapse;
        margin: 0 -0.2rem .2rem;

    }

    #datepicker>div>table>thead>tr>th {
        background-color: #FDB9C8
    }

    #datepicker>div>table>thead>tr>th.ui-datepicker-week-end {
        background-color: #FDB9C8;
    }

    .ui-state-default {
        height: 90px; 
    }

    .ui-datepicker .ui-datepicker-title {
        margin: 0 2 0.3rem;
        line-height: 2em;
        text-align: center;
        font-size: 2rem;
    }

</style>