package speedphp;

import java.util.ArrayList;

public class parser {
    /*define keywords*/
    public static String classSection = "#classes";
    public static String functionSection = "#functions";
    public static String relationSection = "#relations";
    
    
    /*parsed classes*/
    public static ArrayList<classTemplate> parsedClasses = new ArrayList<classTemplate>();
    public static ArrayList<relationTemplate> parsedRelations = new ArrayList<relationTemplate>();
   
    public static void parse(String s){
        
        /* 1. parse into sections */
        
        int positionClasses = s.indexOf(classSection);
        int positionFunctions = s.indexOf(functionSection);
        int positionRelations = s.indexOf(relationSection);
        
        String classes   = s.substring(positionClasses+classSection.length(), positionRelations).trim();
        String relations = s.substring(positionRelations+relationSection.length(), positionFunctions).trim();
        String functions = s.substring(positionFunctions+functionSection.length()).trim();
        
        parseClasses(classes);
        parseFunctions(functions);
        parseRelations(relations);
        
        
      // for(int i=0; i<parsedClasses.size(); i++)
       //    parsedClasses.get(i).toPrint();
        
        for(int i=0; i<parsedRelations.size(); i++)
           parsedRelations.get(i).toPrint();
        
        /* just for test - generate sql madafaka*/
        generateSQL sql = new generateSQL();
     //   sql.generate(parsedClasses);
        
        generatePHP php = new generatePHP();
        php.generate(parsedClasses);
    }
    
    /*parses classes and puts them into an array list of objects*/
    public static void parseClasses(String s){
        String[] definitions = s.split(";");
        
        for(int defCount=0; defCount<definitions.length-1; defCount++){
            /*getting the class name*/
            String tDef = definitions[defCount];
            int start = tDef.indexOf(':');
            int end   = tDef.indexOf('(');
            String className = tDef.substring(start+1, end).trim();
            
            /*create a temp class to pu tinto the arraylist*/
            
            classTemplate temp = new classTemplate(className);
                
            
            /*getting the variables + types*/
            String rawVariables = tDef.substring(end+1, tDef.length()-1);
            String[] vars = rawVariables.split(",");
            
            for(int i=0; i<vars.length; i++){
                String varType = "";
                String varSize = "-1";
                
                vars[i] = vars[i].trim();
                String[] values = vars[i].split(" ");
                
                if(values[0].contains("(")&&values[0].contains(")")){
                    /*variable size has been defined, regex overkill?*/
                    varType = values[0].substring(0, values[0].indexOf("(")).trim();
                    varSize = values[0].substring(values[0].indexOf("(")+1, values[0].indexOf(")")).trim();
                    
                }else varType = values[0];
               
                temp.addVariable(varType, values[1], Integer.valueOf(varSize));
              
            }
            parsedClasses.add(temp);      
        }
      } 
    
     public void parseLinks(String s){
         
     }
     
     /*parses functions into the "classes' class"*/
     public static void parseFunctions(String s){
        /*split the statements first*/
        String[] definitions = s.split(";");
        /*for each statement*/
        for(int defCount=0; defCount<definitions.length; defCount++){
            /*temporary definition storage*/
            String tDef = definitions[defCount];
            /*if the definition makes sense*/
            if(tDef.length()>1){
                /*get the class name and the list of the functions to be included*/
                String className = tDef.substring(tDef.indexOf(":")+1, tDef.indexOf("(")).trim();
                String rawFunctions = tDef.substring(tDef.indexOf("(")+1, tDef.length()-1);

           
                /*common code ugliness, pope not approve*/
                String[] functions = rawFunctions.split(",");
            
           /*for each function name that we've got before*/
            for(int i=0; i<functions.length; i++){
                /*clean it up*/
                functions[i] = functions[i].trim();
                /*let's find to which class does the function belong*/
                for(int x=0; x<parsedClasses.size(); x++){
                   if(parsedClasses.get(x).getName().equals(className)){
                        parsedClasses.get(x).addFunction(functions[i]);
                    }
                }
            }      
          }   
        }
     }
     
     public static void parseRelations(String s){
          String[] definitions = s.split(";");
            /*for each statement*/
            for(int defCount=0; defCount<definitions.length; defCount++){
                String tDef = definitions[defCount];
                /*if the definition makes sense*/
                 if(tDef.length()>1){
                     String rawDefinition = tDef.substring(tDef.indexOf("(")+1, tDef.indexOf(")")).trim();
                     String[] properties = rawDefinition.split(",");
                     relationTemplate r = new relationTemplate(properties[0].trim(), properties[1].trim(), properties[2].trim(), properties[3].trim(), properties[4].trim());
                     parsedRelations.add(r);
                 }
            }
     }
}
