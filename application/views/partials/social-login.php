<!-- Modal -->
<style>
    .modal-backdrop {
        z-index: 0;
    }

    #fbModal .modal-dialog {
        margin: 30px auto;
        width: 400px;
        margin-top:100px;
    }
    #divlogin_1 .form-control{
        width:109%;
    }
    .modal-footer{
        text-align:left;
    }
    .modal-footer .btn-block{
        width:25%;
        
    }
    
    #fbModal .modal-dialog {
        margin: 30px auto;
        width: 500px;
        margin-top:100px;
    }
    #fbModal .modal-header{
        min-height:100px;
    }
    #fbModal .panel-body{
        min-height:20px;
    }
    #fbModal .panel-body{
        min-height:20px;
    }
   
    #copyurl {
        font-size:10px;
    }
</style>

<?php if (isset($userId) && $userId < 1) { ?>
    <div class="modal fade" id="fbModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" >
            <div class="modal-content" id="divsocial" style="display:block">

            </div><!-- end social -->
            
            
        </div>
    </div>
<?php } ?>
 