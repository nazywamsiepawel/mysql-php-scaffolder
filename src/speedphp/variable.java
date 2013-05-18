/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package speedphp; 
    public class variable{
         
         String type;
         String name;
         int size;
         
         public variable(String type, String name, int size){
             if(size==-1){
                 if(type.equals("int")) size = 100;else
                  if(type.equals("string")){
                      size = 250;
                  }
                 
             }
             
             this.type = type;
             this.name = name;
             this.size = size;    
         }
    }