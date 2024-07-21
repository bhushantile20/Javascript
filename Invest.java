import java.io.*;
class Invest
{
    public static void main(String args[])
    {

        Float PrincipalAmount =new Float(0);
        Float intersestRate =new Float(0);
        int numYears=0;
        try
        {
            DataInputStream in=new DataInputStream(System.in);
            System.out.println("Enter a Principal amout:");
            System.out.flush();
            String PrincipalString =in.readLine();

            PrincipalAmount=Float.valueOf(principalString);
              System.out.print("Enter Intersest Rate:");
            System.out.flush();
            String yearsString=in.readLine();
            numYears=Interger.parseInt(yearsString);

        }

        catch(IOException e)
        {
            System.out.println("IO error");
            System.exit(1);
        }
        float value=loan(principalAmount.floatValue(),intersestRate.floatValue(),numYears);
        printline();
        System.out.println("Final value="+value);
        printline();

    }

    static float loan(float p,float r, float n)
    {
        int year=1;
        float num=p;
        while(year <=n)
        {
            sum=sum*(1+r);
            year=year+1;
        }
        return sum;
    }
    static void printline()
    {
        for(int i=1;i<=30;i++)
        {
            System.out.println("=");
        }
        System.out.println(" ");
    }
}