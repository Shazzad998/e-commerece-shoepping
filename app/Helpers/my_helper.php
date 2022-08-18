<?php


function toast_success($message)
{
    return "<script>
      iziToast.success({
        title: 'Success!',
        message: '$message',
        position: 'topRight'
      });
    </script>";
}

function toast_error($message)
{
    return "<script>
      iziToast.error({
        title: 'Error!',
        message: '$message',
        position: 'topRight'
      });
    </script>";
}







?>