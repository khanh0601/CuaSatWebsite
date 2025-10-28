jQuery(document).ready(function($) {
    
    // Facebook Share
    $('.icon_fb').on('click', function(e) {
        e.preventDefault();
        var shareUrl = window.location.href;
        var fbUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(shareUrl);
        openPopup(fbUrl, 626, 436);
    });
    
    // Twitter Share
    $('.icon_twist').on('click', function(e) {
        e.preventDefault();
        var shareUrl = window.location.href;
        var shareText = document.title; // Hoặc lấy từ element khác
        var twitterUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(shareUrl) + '&text=' + encodeURIComponent(shareText);
        openPopup(twitterUrl, 626, 436);
    });
    
    // Facebook Messenger Share
    $('.icon_message').on('click', function(e) {
        e.preventDefault();
        var shareUrl = window.location.href;
        var messengerUrl = 'https://www.facebook.com/dialog/send?link=' + encodeURIComponent(shareUrl) + '&app_id=YOUR_APP_ID&redirect_uri=' + encodeURIComponent(shareUrl);
        
        // Check if mobile
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            // Mobile: Mở app Messenger
            window.location.href = 'fb-messenger://share/?link=' + encodeURIComponent(shareUrl);
        } else {
            // Desktop: Mở popup
            openPopup(messengerUrl, 626, 436);
        }
    });
    
    // Copy Link
    $('.icon_copy').on('click', function(e) {
        e.preventDefault();
        var shareUrl = window.location.href;
        
        // Cách 1: Dùng Clipboard API (modern browsers)
        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(shareUrl).then(function() {
                showCopyNotification('Đã sao chép link!');
            }).catch(function(err) {
                // Fallback nếu lỗi
                copyToClipboardFallback(shareUrl);
            });
        } else {
            // Cách 2: Fallback cho trình duyệt cũ
            copyToClipboardFallback(shareUrl);
        }
    });
    
    // Function mở popup
    function openPopup(url, width, height) {
        var left = (screen.width / 2) - (width / 2);
        var top = (screen.height / 2) - (height / 2);
        window.open(
            url,
            'social-share-dialog',
            'width=' + width + ',height=' + height + ',left=' + left + ',top=' + top + ',toolbar=0,scrollbars=0,status=0,resizable=0,location=0,menuBar=0'
        );
    }
    
    // Fallback copy cho trình duyệt cũ
    function copyToClipboardFallback(text) {
        var textArea = document.createElement("textarea");
        textArea.value = text;
        textArea.style.position = "fixed";
        textArea.style.left = "-999999px";
        textArea.style.top = "-999999px";
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        
        try {
            var successful = document.execCommand('copy');
            if (successful) {
                showCopyNotification('Đã sao chép link!');
            } else {
                showCopyNotification('Không thể sao chép. Vui lòng thử lại!', 'error');
            }
        } catch (err) {
            showCopyNotification('Không thể sao chép. Vui lòng thử lại!', 'error');
        }
        
        document.body.removeChild(textArea);
    }
    
    // Hiển thị thông báo khi copy
    function showCopyNotification(message, type) {
        type = type || 'success';
        
        // Xóa notification cũ nếu có
        $('.copy-notification').remove();
        
        // Tạo notification mới
        var notification = $('<div class="copy-notification ' + type + '">' + message + '</div>');
        $('body').append(notification);
        
        // Hiển thị
        setTimeout(function() {
            notification.addClass('show');
        }, 10);
        
        // Ẩn sau 2 giây
        setTimeout(function() {
            notification.removeClass('show');
            setTimeout(function() {
                notification.remove();
            }, 300);
        }, 2000);
    }
    
});