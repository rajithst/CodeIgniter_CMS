<?php $this->load->view('admin/components/page_head');  ?>

<body style="background:#555;">
<div class="modal show" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <?php $this->load->view($subview);?>
            <div class="modal-footer">
                &copy; <?php echo $meta_title; ?>
            </div>
        </div>
    </div>
</div>
</body>
    <?php $this->load->view('admin/components/page_tail');?>
