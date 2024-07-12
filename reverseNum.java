public class reverseNum
{
    public static void main(String argsp[])
    {
        int rev=0;
        int num=1234;
        int no=num;
        while(num>0)
        {
            int rem=num %10;
            rev=rem+(rev*10);
            num=num/10;

        }

        System.out.println("Number="+no);
        System.out.println("Reverse"+rev);
        
    }
}