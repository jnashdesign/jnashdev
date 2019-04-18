Behance = {
  
  api_url : 'http://www.behance.net/v2/',
  api_key : 'fzck3Bn6IrOojZklTQQoWnnFMma1kRyT'
  
};

Behance.Model = Backbone.Model.extend({
  
  /**
   * Behance API is JSONP.
   * TODO - Link to documentation.
   */
  sync : function( method, model, options ) {
    
    options.dataType = 'jsonp';
    
    return Backbone.sync( method, model, options );
    
  } // sync
  
});

Behance.Collection = Backbone.Collection.extend({
  
  /**
   * Behance API is JSONP.
   * TODO - Link to documentation.
   */
  sync : function( method, model, options ) {
    
    options.dataType = 'jsonp';
    
    return Backbone.sync( method, model, options );
    
  } // sync
  
});

$(function() {
  
});