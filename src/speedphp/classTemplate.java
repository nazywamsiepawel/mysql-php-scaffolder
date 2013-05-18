/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package speedphp;
import java.util.*;

public class classTemplate {
   public  ArrayList<variable> vars = new ArrayList<variable>();
   public  ArrayList<function> functions = new ArrayList<function>();
   public  String className;
   
   
   classTemplate(String className){
       this.className = className;
   }

   public void addVariable(String type, String name, int size){
       variable tempVar = new variable(type, name, size);
       vars.add(tempVar);
   }
   
   public void addFunction(String content){
       function tempF = new function(content);
       functions.add(tempF);
   }
   
   public int length(){
       return vars.size();
   }
   
   public String getName(){
       return this.className;
   }
   
   public void toPrint(){
       System.out.println("class name : " + this.className);
       for(variable v:vars)
           System.out.println("\tname : "+v.name+ ", type "+v.type);
       for(function v:functions)
           System.out.println("\tf.content : "+v.content);
   }
   
   public ArrayList<variable> getVars(){
       return this.vars;
   }
   
   
   
    /*local class for storing variables*/
  
}

