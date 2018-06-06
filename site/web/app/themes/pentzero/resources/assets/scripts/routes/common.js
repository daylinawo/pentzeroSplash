import Barba from 'barba.js/dist/barba.min';

export default {
  init() {
    // JavaScript to be fired on all pages
	var transEffect = Barba.BaseTransition.extend({
		start: function(){
			//eslint-disable-next-line no-unused-vars
			this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
        },
        fadeInNewcontent: function(nc) {
          nc.hide();
          var _this = this;
          $(this.oldContainer).fadeOut(600).promise().done(() => {
            nc.css('visibility','visible');
            nc.fadeIn(600, function(){
              _this.done();
            })
          });
		},
    });
    Barba.Pjax.getTransition = function() {
      return transEffect;
    }
    Barba.Pjax.start();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
