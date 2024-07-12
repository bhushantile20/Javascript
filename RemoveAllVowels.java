public class RemoveAllVowels
{
    public static void main(String argsp[])
    {
        String string="welcome to candid java programming";
        System.out.println("Input string :"+string);
        string=string.replaceAll("[AaEeIiOoUu]","");
        System.out.println(string);

    }
}