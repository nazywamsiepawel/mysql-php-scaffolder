/* Simple example of PHP scaffolding

* TODO: Foreign keys, function templates, populate database with random values
*/
package speedphp;
import java.io.BufferedReader;
import java.io.FileReader;
import java.util.*;


public class SpeedPHP {
    public static String s;
    public static void main(String[] args) {
      String code = readFile("test.txt");
      /*s="#classes\n" +
        "class:example(int(200) id, string(200) title, string(500) description);\n"
      + "class:example2(int(200) id, string(200) name, string(50) surname);\n"
      + "#functions\n"
      + "f:example(create, read, update, delete, gets);\n"
      + "f:example2(create, read, update, delete);\n";
    //   + "example:assign(example[foreign_key] as comments);\n";*/
      
      parser P = new parser();
      P.parse(code);   
    } 
    
    public static String readFile(String filename){
        String con = new String();
         try{
            FileReader fr = new FileReader(filename); 
            BufferedReader br = new BufferedReader(fr); 
            String s = new String(); 
            
            while((s = br.readLine()) != null) { 
            con+=s+"\n";
            } 
            
            fr.close(); 
      }catch (Exception e){
          
      }
         
      return con;
    }
    
}
