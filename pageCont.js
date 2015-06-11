(   function(){
    Array.prototype.move(from, to){
        this.splice(to, 0,this.splice(from, 1)[0]);
    }           
    
    var jumper = {
        list: function(){
            var dis = document.getElementById("sideNav").getElementsByTagName("ul");
            return dis[0];
        },
        getChild: function(){
            var child = this.list.getElementsByTagName("li");
            child.addEventListener("click", function(){
                
            })           
        }
    }
    
    
           
           }());
