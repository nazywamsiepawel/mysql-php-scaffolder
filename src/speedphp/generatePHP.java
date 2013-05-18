package speedphp;
import java.io.*;
import java.util.ArrayList;

public class generatePHP {
  generatePHP(){}
  
  public void generate(ArrayList<classTemplate> classes){
     
    
      for(classTemplate c : classes){
          String classContent = generateClass(c);
          saveClass(c.getName(), classContent);
          
      }
  }
  //fuuuuuuuuuuuu
  private String generateClass(classTemplate inClass){
      String template = "<?php\n"
                       + "class [class_name]{\n"
                       + "[vars]\n\n"
                       + "[functions]\n"
                       + "}\n?>";
      String functions = new String();
      template = template.replace("[class_name]", inClass.getName());
      
      String vars = php_vars(inClass.getVars());
      template = template.replace("[vars]", vars);
      /*generating internal functions*/
      
      for(int i=0; i<inClass.functions.size(); i++){
          String fName = inClass.functions.get(i).content;
          String functionTemplate = loadFunctionTemplate(fName);
          if(fName.equals("gets")||fName.equals("sets")){
            functionTemplate = get_multiple(functionTemplate, inClass.getVars(), inClass.getName());
          } else {
            functionTemplate = functionTemplate.replaceAll("\n", System.getProperty("line.separator"));
            functionTemplate = fillFunction(functionTemplate, inClass.getVars(), inClass.getName());
            functionTemplate = functionTemplate.replace("[functions]", functionTemplate);
          }
          functions+=functionTemplate+"\n\n\n";
      }
       template = template.replace("[functions]", functions);
      
      /*generating relation functions*/
       
       
      
      return template;
  }
  
  private void saveClass(String name, String content){
      try{
        // Create file 
        FileWriter fstream = new FileWriter("out/php/"+name+".class.php");
        BufferedWriter out = new BufferedWriter(fstream);
        out.write(content);
        //Close the output stream
        out.close();
      }catch (Exception e){//Catch exception if any
        System.err.println("Error: " + e.getMessage());
    }
  }
  
  private String loadFunctionTemplate(String func){
        String con = new String();
        String fTemplate = new String();
        try{
            FileReader fr = new FileReader("templates/func_php.tmp"); 
            BufferedReader br = new BufferedReader(fr); 
            String s; 
            
            while((s = br.readLine()) != null) { 
            con+=s+"\n";
            } 
            
            fr.close(); 
      }catch (Exception e){
        System.err.println("(f:"+func+") cannot find template file");
      }
        
      if(1==2){
           System.err.println("Cannot find reference for f:"+func );
      }else{
          fTemplate = con.substring(con.indexOf("#"+func)+func.length()+1, con.indexOf("#"+func+"-end")).trim();
        //  System.out.println("loaded function : " + fTemplate);       
      }
     
      return fTemplate;
  }
  
  
  /*generating basic parts*/
  
  private String php_params_var(ArrayList<variable> vars){
      String merged = new String();
      for(int i=0; i<vars.size(); i++){
          if(i == vars.size()-1){
              merged+="$"+vars.get(i).name;
          } else {
              merged+="$"+vars.get(i).name+", ";
          }          
      }
      return merged;
      
  }
  
  private String mysql_params(ArrayList<variable> vars){
      String merged = new String();
      for(int i=0; i<vars.size(); i++){
          if(i == vars.size()-1){
              merged+="`"+vars.get(i).name+"`";
          } else {
              merged+="`"+vars.get(i).name+"`, ";
          }          
      }
      return merged;
  }
  
   private String mysql_params_values(ArrayList<variable> vars){
      String merged = new String();
      for(int i=0; i<vars.size(); i++){
          if(i == vars.size()-1){
              merged+="'"+vars.get(i).name+"'";
          } else {
              merged+="'$"+vars.get(i).name+"', ";
          }          
      }
      return merged;
  }
   
    private String php_vars(ArrayList<variable> vars){
      String merged = new String();
      for(int i=0; i<vars.size(); i++){
          
              merged+="\t var $"+vars.get(i).name+";\n";
          }          
      
      return merged;
  }
    
  private String php_self_assign(ArrayList<variable> vars){
      String merged = new String();
      for(int i=0; i<vars.size(); i++){
          
              merged+="\t $this->"+vars.get(i).name+"=$"+vars.get(i).name+";\n";
          }          
      
      return merged;
  }
  
  private String get_multiple(String filled, ArrayList<variable> vars, String className){
      String merged = new String();
      for(int i=0; i<vars.size(); i++){
          String temp = filled;
          temp = temp.replace("[var_name]", vars.get(i).name);
          temp = temp.replace("[var_name]", vars.get(i).name);
          temp = temp.replace("[var_name]", vars.get(i).name);
          temp = temp.replace("[class_name]", className);
          
          merged+=temp+"\n\n";
      }
      return merged;
  }
   
  /*main replacing function*/
   
   private String fillFunction(String filled, ArrayList<variable> vars, String className){
 
       filled = filled.replace("[php_params_vars]", php_params_var(vars));
       filled = filled.replace("[mysql_params]", mysql_params(vars));
       filled = filled.replace("[mysql_params_values]", mysql_params_values(vars));
       filled = filled.replace("[php_self_assign_vars]", php_self_assign(vars));
       filled = filled.replace("[class_name]", className);
     
       //System.out.println("filled : " + filled);
       
       return filled;
   }
   
   
}
