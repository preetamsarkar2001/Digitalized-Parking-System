package test;import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JTextArea;
import javax.swing.JTextField;
public class PhoneBook extends JFrame
{
JFrame f;
PhoneBook() throws SQLException
{
setTitle("Phone Book Application");
JLabel name, address, phone, email, res;
JTextField tname, tphone, temail;JTextArea taddress;
JButton add, del, nex, prev;
name = new JLabel("Name: ");
name.setBounds(30, 20, 100, 30);
add(name);
tname = new JTextField();
tname.setBounds(130, 20, 350, 30);
add(tname);
address = new JLabel("Address: ");
address.setBounds(30, 60, 100, 30);
add(address);
taddress = new JTextArea();
taddress.setBounds(130, 60, 350, 80);
add(taddress);
phone = new JLabel("Phone: ");
phone.setBounds(30, 150, 100, 30);
add(phone);
tphone = new JTextField();
tphone.setBounds(130, 150, 350, 30);add(tphone);
email = new JLabel("Email: ");
email.setBounds(30, 190, 100, 30);
add(email);
temail = new JTextField();
temail.setBounds(130, 190, 350, 30);
add(temail);
res = new JLabel("Enter Details...");
res.setBounds(75, 250, 350, 30);
add(res);
add = new JButton("ADD");
add.setBounds(500, 40, 100, 40);
add(add);
del = new JButton("DELETE");
del.setBounds(500, 90, 100, 40);
add(del);
nex = new JButton("NEXT");
nex.setBounds(500, 140, 100, 40);
add(nex);prev = new JButton("PREVIOUS");
prev.setBounds(500, 190, 100, 40);
add(prev);
Connection con = 
DriverManager.getConnection("jdbc:mysql://localhost:3360/fym
ca", "root", "root");
add.addActionListener(new ActionListener() 
{
public void actionPerformed(ActionEvent e) 
{
String s = tname.getText();
String s1 = taddress.getText();
String s2 = tphone.getText();
String s3 = temail.getText();
if(!(s.equals("") && s1.equals("") && 
s2.equals("") && s3.equals(""))) {
try 
{
res.setText("");
Statement st = con.createStatement();
st.executeUpdate("Insert into 
phonebook 
values('"+tname.getText()+"','"+taddress.getText()+"','"+tph
one.getText()+"','"+temail.getText()+"')");res.setText("Details Added 
successfully...");
JOptionPane.showMessageDialog(f, 
"Details added in database.");
}
catch (SQLException e1) 
{
e1.printStackTrace();
}
}
else
{
JOptionPane.showMessageDialog(f, 
"Can't keep any empty field", 
"Alert",JOptionPane.ERROR_MESSAGE);
}
}
});
del.addActionListener(new ActionListener() 
{
public void actionPerformed(ActionEvent e) 
{
String s = tphone.getText();
if(!(s.equals(""))) 
{try 
{
res.setText("");
Statement st = 
con.createStatement();
st.executeUpdate("Delete from
phonebook where tname = '"+tphone.getText()+"'");
res.setText("Record 
Deleted...");
JOptionPane.showMessageDialog(f, 
"Record Deleted from Phonebook.");
}
catch(SQLException e1)
{
e1.printStackTrace();
}
}
else
{
JOptionPane.showMessageDialog(f, 
"Please Enter the Phone number to be 
deleted!!!","Alert",JOptionPane.ERROR_MESSAGE);
}
}
});
nex.addActionListener(new ActionListener() {
public void actionPerformed(ActionEvent e)
{
try 
{
Statement st = 
con.createStatement(ResultSet.TYPE_SCROLL_SENSITIVE, 
ResultSet.CONCUR_READ_ONLY);
ResultSet rs = 
st.executeQuery("Select * from phonebook");
while(rs.next())
{
tname.setText(rs.getString(1));
taddress.setText(rs.getString(2));
tphone.setText(rs.getString(3));
temail.setText(rs.getString(4));
}
}
catch(SQLException e1) 
{
e1.printStackTrace();
}
}
});
prev.addActionListener(new ActionListener() {
public void actionPerformed(ActionEvent e) 
{
try 
{
Statement st = 
con.createStatement(ResultSet.TYPE_SCROLL_SENSITIVE, 
ResultSet.CONCUR_READ_ONLY);
ResultSet rs = 
st.executeQuery("Select * from phonebook");
rs.last();
while(rs.previous())
{
tname.setText(rs.getString(1));
taddress.setText(rs.getString(2));
tphone.setText(rs.getString(3));
temail.setText(rs.getString(4));
}
}
catch(SQLException e1)
{
e1.printStackTrace();
}
}
});setSize(800, 800);
 setLayout(null);
 setVisible(true);
 setDefaultCloseOperation(EXIT_ON_CLOSE);
}
public static void main(String[] args) throws 
SQLException 
{
new PhoneBook();
}
}