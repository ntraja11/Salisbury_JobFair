$(document).ready(function(){
        jQuery(function() {
                jQuery('#carousel').allinone_carousel({
                        skin: 'charming',
                        width: 940,
                        height: 400,
                        autoPlay: 1,
                        target: '_blank',
                        resizeImages:true,
                        autoHideBottomNav:false,
                        showElementTitle:false,
                        verticalAdjustment:50,
                        showPreviewThumbs:false,
                        numberOfVisibleItems:3,
						elementsHorizontalSpacing:200,
						elementsVerticalSpacing:60,
                        nextPrevMarginTop:23,
                        playMovieMarginTop:0,
                        bottomNavMarginBottom:-30,
						responsive:1,
						responsiveRelativeToBrowser:1,
						showNavArrows:1
                });
        });
});