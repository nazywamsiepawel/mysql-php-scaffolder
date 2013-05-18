/*
 * Class for storing a single relation between two classes (x, y)
 * Type : one-to-many, many-to-many
 * Pancakes
 */
package speedphp;

public class relationTemplate {
    public String foreign_key;
    public String x;
    public String y;
    public String type;
    public String name;
    
    relationTemplate(String foreign_key, String x, String y, String name, String type){
        this.foreign_key = foreign_key;
        this.x = x;
        this.y = y;
        this.type = type;
        this.name = name;
    }
    
    public String toPrint(){
        System.out.println("relation(foreign key : "+this.foreign_key +  ", X : "+this.x+", Y : "+this.y+", name " + this.name+",type : "+this.type+")");
        return "relation(X : "+this.x+", Y : "+this.y+", type : "+this.type+")";
    }
    public String getX(){
        return this.x;
    }
    public String getY(){
        return this.y;
    }
    public String getName(){
        return this.name;
    }
    public String getType(){
        return this.type;
    }
    public String getForeignKey(){
        return this.foreign_key;
    }
    
}
