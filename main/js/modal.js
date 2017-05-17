

  (function() {
    'use strict';
    var dialogButton = document.querySelector('#seller');
    var dialog = document.querySelector('#seller-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
    });
  }());

  (function() {
    'use strict';
    var dialogButton = document.querySelector('#apply-navbar');
    var dialog = document.querySelector('#seller-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
    });
  }());

  
  
  (function() {
    'use strict';
    var dialogButton = document.querySelector('#buyer');
    var dialog = document.querySelector('#buyer-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
    });
  }());



   (function() {
    'use strict';
    var dialogButton = document.querySelector('#show-contact-1');
    var dialog = document.querySelector('#request-contact-1');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
    });
  }());

   (function() {
    'use strict';
    var dialogButton = document.querySelector('#show-contact-2');
    var dialog = document.querySelector('#request-contact-2');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
    });
  }());

   (function() {
    'use strict';
    var dialogButton = document.querySelector('#show-contact-3');
    var dialog = document.querySelector('#request-contact-3');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
    });
  }());