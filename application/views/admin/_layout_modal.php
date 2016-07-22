<?php $this->load->view('admin/components/page_head');  ?>

<body style="background:#555;">
<div class="modal show" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Page title</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                &copy; <?php echo $meta_title; ?>
            </div>
        </div>
    </div>
</div>
</body>
    <?php $this->load->view('admin/components/page_tail');?>
