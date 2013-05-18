
package speedphp;

import java.util.ArrayList;

public class generateSQL {
  generateSQL(){  
  }
  
  public void generate(ArrayList<classTemplate> classes, ArrayList<relationTemplate> relations){
      /* 1. generate header/db_name*/
      String projectName = "projectName";
      for(classTemplate c : classes){
          tableGen(c);
      }
  }
  
  public String headerGen(){
      return null;
  }
  
  public String tableGen(classTemplate c){
      
      String className  = c.getName();
      String template = "--Table structure for "+className+"\n\nCREATE TABLE IF NOT EXISTS `"+className+"` (\n";
      
      int varCount = c.getVars().size();
      for(variable v: c.getVars()){
          String varName = v.name;
          String varType = v.type;
          int varSize = v.size;
          
          template += "\t`"+varName+"` "+varType+" ("+varSize+") NOT NULL AUTO_INCREMENT,\n";          
      }
      
      template+="\tPRIMARY KEY (`id`)"+
                ") ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19;";
      System.out.print(template);
      return template;
  }
  
  public String relationalTableGen(relationTemplate r){
      String table = new String();
      return table;
  }
    
}
