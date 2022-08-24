<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ url('public/excel.js') }}"></script>

    <table id="customers1" class="table2excel"  data-tableName="Test Table 1">
    
          <div class="col-sm-2"><a
          class="btn btn-success exportToExcel" style="margin-bottom:10px"><i
          class="fa fa-file-excel-o exportToExcel"></i> Export to Excel</a>
          </div>
          
          
          -------------
                  <script>
        $(function() {
            $(".exportToExcel").click(function(e){

                $(".table2excel").table2excel({
                exclude: ".noExl",
                name: "Worksheet Name",
                filename: "Addmission Excel",
                fileext: ".xls",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true
                });
                        });

        });
    </script>