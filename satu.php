<?php

public static void Main(string[] args)
{
    Console.WriteLine("Enter string: ");
    string st= Console.ReadLine();
    Console.WriteLine(Alpha(st));
}

public static string Alpha(string str)
{
    int[] nums = new int[str.Length / 2]; // 4 5 2 
    string num = "";
    string nw = "";
    string harfler = " ";
    string[] harflerr = new string[str.Length / 2]; // A B C
     
    for(int i = 0; i < str.Length; i += 2)
    {
        harfler += str[i].ToString();
    }
    for(int i = 1; i < str.Length; i+=2)
    {
        num += str[i].ToString();
    }
    for(int i = 0; i < num.Length; i++)
    {
        nums[i] += num[i];
    }
    for(int i = 0; i < harflerr.Length; i++)
    {
        harflerr[i] += harfler[i];
    }
    for(int i = 0; i < harflerr.Length; i++)
    {
        for(int j = 0; j < nums[i]; j++)
        {
            nw += harflerr[i];
        }
    }

    return nw;
}

?>